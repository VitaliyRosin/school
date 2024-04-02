<?php

namespace controllers;

use core\Viewer;

class Gallery
{
    public function __construct(array $url){
        Viewer::view($url);
    }
}