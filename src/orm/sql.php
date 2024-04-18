<?php


namespace orm;
use \PDO;
use \PDOStatement;


abstract class sql
{
    protected PDO $connect;
    protected PDOStatement $statement;
    protected string $tableName = '';

    public function __construct(){
        $this->connect = (new Connect())->getConnect();
    }

    public function execute(){
        $this->statement = $this->connect->query($this->buildQuery());
        $this->statement->execute();
    }

    public function setTableName(string|array $tableName): void
    {
        if(is_array($tableName)){
            foreach($tableName as $alias => $name){
                $this->tableName = $name . ' ' . $alias;
                break;
            }
        }else{
            $this->tableName = $tableName;
        }
    }
}