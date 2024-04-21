<?php


namespace orm;


class Update extends sql implements query
{
    private string $sets = '';

    public function buildQuery() : string
    {
        $sql = 'UPDATE ' . $this->tableName . ' SET ' . $this->sets;
        if(!empty($this->where)){
            $sql .= $this->where;
        }
        return $sql;
    }

    public function setSets(string|array $values): void
    {
        foreach ($values as $key => $value){
            if(is_string($value)){
                $value = "'" . $value . "'";
            }elseif(is_integer($value) || is_bool($value)){
                $value = $value;
            }else{
                break;
            }
            if(!empty($this->sets)){
                $this->sets .= ',';
            }
            $this->sets .= $key . '=' . $value;
        }
    }
}