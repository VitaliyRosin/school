<?php

namespace controllers;

use core\Viewer;
use models\Users;

class User
{
    private $model;
    private $url;

    public function __construct(array $url){
        $this->model = new Users();
        $this->url = $url;
    }

    public function index(){
        $data['users'] = $this->model->findAll();
        Viewer::view($this->url, $data);
    }

    public function contacts(){
        $data['user'] = $this->model->findOne(1);
        Viewer::view($this->url, $data);
    }

}