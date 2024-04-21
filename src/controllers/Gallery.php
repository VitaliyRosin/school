<?php

namespace controllers;

use core\Viewer;
use models\Galleries;

class Gallery
{
    private $model;
    private $url;

    public function __construct(array $url){
        $this->url = $url;
    }

    public function index(){
        $this->model = new Galleries();
        $data['pictures'] = $this->model->findAll();
        Viewer::view($this->url, $data);
    }

    public function create(){
        if(!empty($_POST['save'])){
            $this->model = new Galleries();
            $this->model->insert($_POST);
        }
        Viewer::view($this->url);
    }

    public function update(){
        if(!empty($_POST['save'])) {
            $this->model = new Galleries();
            $this->model->update($_POST, $_POST['gallery_id']);
            header('Location: /gallery/index');
        }
        Viewer::view($this->url);
    }

    public function delete(){
        if(!empty($_GET['id'])){
            $this->model = new Galleries();
            $this->model->Delete($_GET['id']);
        }
        header('Location: /gallery/index');
    }
}