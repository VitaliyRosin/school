<?php

namespace models;

class Posts extends Model
{
    protected string $tableName = 'post';

    protected array $fieldList = [
        'title',
        'text',
    ];
}