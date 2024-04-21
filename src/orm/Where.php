<?php


namespace orm;


class Where
{
    private array $operators = [
        'eq' => '=',
        'gt' => '>',
        'ge' => '=>',
        'lt' => '<',
        'le' => '<=',
        'ne' => '!=',
        ];

    public function andWhere(array $conditions): string
    {
        $where[] = 'true';

        foreach($conditions as $condition) {
            $value = (!is_int($condition[2])) ? "'" . $condition[2] . "'" : $condition[2];
            $where[] = $condition[1] . $this->operators[$condition[0]] . $value;
        }
        return ' WHERE ' . implode(' AND ', $where);
    }

    public function orWhere(array $conditions): string
    {
        $where[] = 'true';

        foreach($conditions as $condition){
            $value = (!is_int($condition[2])) ? "'" . $condition[2] . "'" : $condition[2];
            $where[] = $condition[1] . $this->operators[$condition[0]] . $value;
        }
        return ' WHERE ' . imlode(' OR ', $where);
    }
}