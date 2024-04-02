<?php

namespace core;

class Viewer
{
    public static function view(array $url, array $data = []): void{
        include_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$url[0].DIRECTORY_SEPARATOR.$url[1].'.php';
    }

}