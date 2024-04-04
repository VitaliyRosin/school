<?php

namespace core;
use controllers\Errors;

final class Router
{
    public function run(){
        $url = empty($_SERVER['REDIRECT_URL']) ? "/" : $_SERVER['REDIRECT_URL'];
        $config = include_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'common.php';
        if (array_key_exists($url, $config)){
            $url = explode(":", $config[$url]);
        }else{
            echo '404';
            exit;
        }

        $constPath = 'controllers\\';

        $path = $constPath.$url[0];
        if (!class_exists($path)) {
            Errors::controller();
            exit;
        }

        $controller = new $path($url);

        if(!method_exists($path, $url[1])){
            Errors::index();
            exit;
        }

        $action_name = $url[1];

        $controller->$action_name();
    }
}