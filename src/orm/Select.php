<?php

namespace orm;

class Select extends sql implements query
{
    private string $tableName = '';
    private string $fields = '*';

    public function buildQuery() : string
    {
        return 'SELECT ' . $this->fields . ' FROM ' . $this->tableName;
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

    public function setFields(string|array $fields): void
    {
        if(is_array($fields)){
            $this->fields = implode(',',$fields);
        }else{
            $this->fields = $fields;
        }

    }

    public function getData(){
        return $this->statement->fetchAll($this->connect::FETCH_ASSOC);
    }
}