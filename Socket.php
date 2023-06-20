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
                            $from->userId = $message['userId'];
                            break;
                        case 'newMessage':
                            for ($i = 0; $i < count($this->connections); $i ++) {
                                if ($this->connections[$i]->userId == $message['data']['to_user']) {
                                    $sendData = array('type' => 'newMessage', 'data' => $message['data']);
                                    $this->connections[$i]->send(json_encode($sendData));
                                }
                            }
                            break;
                    }
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
?>