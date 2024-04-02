<?php


namespace controllers;


use core\Viewer;

class About
{
    public function __construct(array $url){
        Viewer::view($url);
    }

}