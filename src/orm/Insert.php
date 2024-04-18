<?php


namespace orm;


class Insert extends sql implements query
{
    private string $fields = '';
    private string $values = '';

    public function buildQuery() : string
    {
        return 'INSERT INTO ' . $this->tableName . '(' .$this->fields . ')  VALUES (' .$this->values . ')';
    }

    public function setFields(string|array $fields): void
    {
        if(is_array($fields)){
            $this->fields = implode(',',$fields);
        }else{
            $this->fields = $fields;
        }
    }

    public function setValues(string|array $values): void
    {
        foreach ($values as $value){
            if(is_string($value)){
                $value = "'" . $value . "'";
            }elseif(is_integer($value) || is_bool($value)){
                $value = $value;
            }else{
                break;
            }
            if(!empty($this->values)){
                $this->values .= ',';
            }
            $this->values .= $value;
        }
    }
}