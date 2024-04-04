<?php

namespace models;

class Galleries extends Model
{
    protected array $model =[
        'id' => 1,
        'title' => 'Picture 1 title',
        'size' => '93 403 kb',
        'user' => 'Picture 1 user',
    ];
    protected array $models = [
        [
            'id' => 1,
            'title' => 'Picture 1 title',
            'url' => 'Picture 1 url',
            'date_time' => 'Picture 1 datetime',
        ],
        [
            'id' => 2,
            'title' => 'Picture 2 title',
            'url' => 'Picture 2 url',
            'date_time' => 'Picture 2 datetime',
        ],
        [
            'id' => 3,
            'title' => 'Picture 3 title',
            'url' => 'Picture 3 url',
            'date_time' => 'Picture 3 datetime',
        ],
    ];

}