<?php

namespace models;

use orm\Insert;
use orm\Select;
use orm\sql;
use orm\Update;

class Model
{
    public function findOne(int $id): array{
        return $this->model;
    }

    public function findAll(): array{
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->execute();
        return $select->getData();
    }

    public function insert(array $data): void
    {
        $insert = new Insert();
        $insert->setTableName($this->tableName);
        $insert->setFields($this->getFields($data));
        $insert->setValues($this->getValues($data));
        $insert->execute();

    }

    private function getFields(array $data): array
    {
        $fields = array_keys($data);
        if(!empty($this->fieldList)){
            $fields = array_intersect($this->fieldList, $fields);
        }
        return $fields;
    }

    private function getValues(array $data): array
    {
        $result = [];
        $fields = array_keys($data);
        if(!empty($this->fieldList)){
            $fields = array_intersect($this->fieldList, $fields);
        }
        foreach($fields as $field){
            $result[] = $data[$field];
        }
        return $result;
    }

    public function update(array $data): void
    {
        $update = new Update();
        $update->setTableName($this->tableName);
        $update->setSets($this->getSets($data));
        $update->execute();
    }

    private function getSets($data):array
    {
        $result = [];
        $fields = array_keys($data);
        if(!empty($this->fieldList)){
            $fields = array_intersect($this->fieldList, $fields);
        }
        foreach($fields as $field){
            if(strlen($data[$field]) != 0){
                $result[$field] = $data[$field];
            }
        }
        return $result;
    }

}