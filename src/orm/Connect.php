<?php

namespace orm;

use \PDO;

final class Connect
{
    private string $dns = '';
    private string $username = '';
    private string $password = '';
    private PDO $connection;

    public function __construct(){
        $this->init();
        $this->connect();
    }

    private function init():void
    {
        $config = include_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'dbconfig.php';
        $this->dns = $config['driver'].':host='.$config['host'].';dbname='.$config['dbname'];
        echo $this->dns;
        $this->username = $config['user'];
        $this->password = $config['password'];
    }

    private function connect():void
    {
        $this->connection = new PDO($this->dns, $this->username, $this->password);
    }

    public function getConnect():PDO
    {
        return $this->connection;
    }
}