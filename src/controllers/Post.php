<?php

namespace controllers;

use core\Viewer;
use models\Galleries;
use models\Posts;

class Post
{
    private $model;
    private $url;

    public function __construct(array $url){
        //$this->model = new Posts();
        $this->url = $url;
    }

    public function index(){
        $this->model = new Posts();
        $data['posts'] = $this->model->findAll();
        Viewer::view($this->url, $data);
    }

    public function read(){
        $data['posts'] = $this->model->findOne(1);
        Viewer::view($this->url, $data);
    }

    public function create(){
        if(!empty($_POST['save'])){
            $this->model = new Posts();
            $this->model->insert($_POST);
        }
        Viewer::view($this->url);
    }

    public function update(){
        if(!empty($_POST['save'])){
            $this->model = new Posts();
            $this->model->update($_POST, $_POST['post_id']);
            header('Location: /post/index');
        }
        Viewer::view($this->url);
    }

    public function delete(){
        if(!empty($_GET['id'])){
            $this->model = new Posts();
            $this->model->Delete($_GET['id']);
        }

        header('Location: /post/index');
    }
}