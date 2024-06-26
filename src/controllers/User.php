<?php

namespace controllers;

use core\Viewer;
use models\Posts;
use models\Users;

class User
{
    private $model;
    private $url;

    public function __construct(array $url){
        //$this->model = new Users();
        $this->url = $url;
    }

    public function index(){
        $this->model = new Users();
        $data['users'] = $this->model->findAll();
        Viewer::view($this->url, $data);
    }

    public function contacts(){
        $data['user'] = $this->model->findOne(1);
        Viewer::view($this->url, $data);
    }

    public function create(){
        if(!empty($_POST['save'])){
            $this->model = new Users();
            $this->model->insert($_POST);
        }
        Viewer::view($this->url);
    }

    public function update(){
        if(!empty($_POST['save'])){
            $this->model = new Users();
            $this->model->update($_POST);
        }
        Viewer::view($this->url);
    }

}