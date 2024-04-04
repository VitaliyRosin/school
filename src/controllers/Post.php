<?php

namespace controllers;

use core\Viewer;
use models\Posts;

class Post
{
    private $model;
    private $url;

    public function __construct(array $url){
        $this->model = new Posts();
        $this->url = $url;
    }

    public function index(){
        $data['posts'] = $this->model->findAll();
        Viewer::view($this->url, $data);
    }

    public function read(){
        $data['posts'] = $this->model->findOne(1);
        Viewer::view($this->url, $data);
    }
}