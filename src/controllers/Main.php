<?php


namespace controllers;

use core\Viewer;
use models\Posts;

class Main
{
    public function __construct(array $url){
        $model = new Posts();
        $data['posts'] = $model->findAll();
        Viewer::view($url, $data);
    }
}