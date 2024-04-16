<?php


namespace orm;


class Delete
{
    //DELETE FROM table_name WHERE condition;
    private string $tableName = '';
    private string $conditions = '';

    public function buildQuery() : string
    {
        return 'DELETE FROM ' . $this->tableName . ' WHERE ' . $this->conditions;
    }

    public function setTableName(string|array $tableName): void
    {
        $this->tableName = $tableName;
    }

    public function setConditions(string $conditions): void
    {
        $this->conditions = $conditions;
    }

}
