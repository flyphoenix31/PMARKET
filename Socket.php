<?php
require __DIR__ . '/vendor/autoload.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

$port = 10725;

// Create a new WebSocket server
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new class () implements MessageComponentInterface {

                private $connections;
                private $port;

                public function __construct()
                {
                    $this->connections = array();
                    $this->port = 10725;
                    echo "Server started on port $this->port\n";
                }

                public function onOpen(ConnectionInterface $conn)
                {
                    echo "New connection established\n";
                    $this->connections[] = $conn;
                }

                public function onMessage(ConnectionInterface $from, $message)
                {
                    echo "Received message: $message\n";

                    // $message = json_decode($message, true);
                    // $message['message']

                    $message = json_decode($message, true);
                    switch ($message['type'])
                    {
                        case 'init':
                            $this->init($from, $message);
                            break;
                        case 'newMessage':
                            $this->newMessage($from, $message['data']);
                            break;
                        case 'checkUsersStatus':
                            $this->checkUsersStatus($from, $message['data']);
                            break;
                    }
                }

                public function init($from, $data)
                {
                    $from->userId = $data['userId'];
                    $sendData = array('type' => 'userConnected', 'data' => array('id' => $data['userId']));
                    $jsonData = json_encode($sendData);
                    foreach($this->connections as $connection)
                    {
                        if ($connection != $from)
                        {
                            $connection->send($jsonData);
                        }
                    }
                }

                public function newMessage($from, $message)
                {
                    for ($i = 0; $i < count($this->connections); $i ++) {
                        if ($this->connections[$i]->userId == $message['message']['to_user']) {
                            $sendData = array('type' => 'newMessage', 'data' => $message);
                            $this->connections[$i]->send(json_encode($sendData));
                        }
                    }
                }

                public function checkUsersStatus($from, $data)
                {
                    $status = array();
                    for ($i = 0; $i < count($data); $i ++)
                    {
                        $connected = false;
                        foreach($this->connections as $connection) {
                            if ($connection->userId == $data[$i]) {
                                $connected = true;
                                break;
                            }
                        }
                        var_dump($data[$i]);
                        $status[$data[$i]] = $connected;
                    }
                    $from->send(json_encode(array('type' => 'connectionStatus', 'data' => $status)));
                }

                public function onClose(ConnectionInterface $conn)
                {
                    echo "Client disconnected\n";
                    for ($i = 0; $i < count($this->connections); $i ++)
                    {
                        if ($this->connections[$i] == $conn)
                        {
                            array_splice($this->connections, $i, 1);
                            break;
                        }
                    }
                    $sendData = array('type' => 'userDisconnected', 'data' => array('id' => $conn->userId));
                    $jsonData = json_encode($sendData);
                    foreach($this->connections as $connection)
                    {
                        $connection->send($jsonData);
                    }
                }

                public function onError(ConnectionInterface $conn, \Exception $e)
                {
                    echo "Error: " . $e->getMessage() . "\n";
                }
            }
        )
    ),
    $port
);

$server->run();
var_dump("hello");
?>