<?php

namespace models;

class Users extends Model
{
    protected array $model =[
            'id' => 1,
            'first_name' => 'User 1 name',
            'second_name' => 'User 1 surname',
            'date_to_birth' => 'User 1 birthday',
            'phone' => '067-741-09-08',
            'email' => 'user1@gmail.com',
    ];

    protected array $models = [
        [
            'id' => 1,
            'nick_name' => 'User 1',
            'login' => 'User 1 login',
            'password' => 'User 1 password',
        ],
        [
            'id' => 2,
            'nick_name' => 'User 2',
            'login' => 'User 2 login',
            'password' => 'User 2 password',
        ],
        [
            'id' => 3,
            'nick_name' => 'User 3',
            'login' => 'User 3 login',
            'password' => 'User 3 password',
        ],
    ];
}