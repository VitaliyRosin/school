<?php

namespace controllers;

use core\Viewer;
use models\Galleries;

class Gallery
{
    private $model;
    private $url;

    public function __construct(array $url){
        $this->model = new Galleries();
        $this->url = $url;
    }

    public function index(){
        $data['pictures'] = $this->model->findAll();
        Viewer::view($this->url, $data);
    }

    public function show(){
        $data['picture'] = $this->model->findOne(1);
        Viewer::view($this->url, $data);
    }
}