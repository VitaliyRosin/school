<?php


namespace orm;
use \PDO;
use \PDOStatement;


abstract class sql
{
    protected PDO $connect;
    protected PDOStatement $statement;

    public function __construct(){
        $this->connect = (new Connect())->getConnect();
    }

    public function execute(){
        $this->statement = $this->connect->query($this->buildQuery());
        $this->statement->execute();
    }
}