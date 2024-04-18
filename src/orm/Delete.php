<?php


namespace orm;


class Delete
{
    //DELETE FROM table_name WHERE condition;
    private string $conditions = '';

    public function buildQuery() : string
    {
        return 'DELETE FROM ' . $this->tableName . ' WHERE ' . $this->conditions;
    }

    public function setConditions(string $conditions): void
    {
        $this->conditions = $conditions;
    }

}