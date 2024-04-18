<?php

namespace models;

class Galleries extends Model
{
    protected string $tableName = 'gallery';

    protected array $fieldList = [
        'title',
        'size',
        'url',
    ];
}