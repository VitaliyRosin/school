<?php

namespace models;

class Users extends Model
{
    protected string $tableName = 'user';

    protected array $fieldList = [
        'first_name',
        'second_name',
        'date_to_birth',
        'phone',
        'email',
        ];
}