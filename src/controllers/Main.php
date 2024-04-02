<?php


namespace controllers;

use core\Viewer;

class Main
{
    public function __construct(array $url){
        Viewer::view($url);
    }
}