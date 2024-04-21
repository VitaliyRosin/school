<?php


namespace orm;
use \PDO;
use \PDOStatement;


abstract class sql
{
    protected PDO $connect;
    protected PDOStatement $statement;
    protected string $tableName = '';
    private Where $where_obj;
    protected string $where = '';

    public function __construct(){
        $this->connect = (new Connect())->getConnect();
        $this->where_obj = new Where();
    }

    public function execute(){
        $this->statement = $this->connect->query($this->buildQuery());
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

    public function andWhere(array $condition):void
    {
        $this->where = $this->where_obj->andWhere($condition);
    }

    public function orWhere(array $condition):void
    {
        $this->where = $this->where_obj->orWhere($condition);
    }
}