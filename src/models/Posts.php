<?php

namespace models;

class Posts extends Model
{
    protected array $model =[
            'id' => 1,
            'title' => 'Post 1 title',
            'text' => 'Post 1 text',
            'date_time' => 'Post 1 datetime',
            'user' => 'Post 1 user',
    ];
    protected array $models = [
        [
            'id' => 1,
            'title' => 'Post 1 title',
            'text' => 'Post 1 text',
            'date_time' => 'Post 1 datetime',
            'user' => 'Post 1 user',
        ],
        [
            'id' => 2,
            'title' => 'Post 2 title',
            'text' => 'Post 2 text',
            'date_time' => 'Post 2 datetime',
            'user' => 'Post 2 user',
        ],
        [
            'id' => 3,
            'title' => 'Post 3 title',
            'text' => 'Post 3 text',
            'date_time' => 'Post 3 datetime',
            'user' => 'Post 3 user',
        ],
    ];
}