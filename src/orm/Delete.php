<?php


namespace orm;


class Delete extends sql implements query
{
    public function buildQuery() : string
    {
        $sql = 'DELETE FROM ' . $this->tableName;
        if(!empty($this->where)){
            $sql .= $this->where;
        }
        return $sql;
    }
}