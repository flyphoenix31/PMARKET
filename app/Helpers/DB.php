<?php

namespace App\Helpers;

use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;

class DB
{
    // Homepage action
    public static function connect()
    {

        $pdo = new PDOConnector(
            'localhost',
            'root',
            '',
            'creative_site'
        );
        $pdoConn = $pdo->connect('utf8', []);
        $GLOBALS['db'] = new Mysql($pdoConn);
    }
    public static function get()
    {
        return $GLOBALS['db'];
    }
}
