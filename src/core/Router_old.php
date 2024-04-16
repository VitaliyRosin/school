<?php

namespace core;
use controllers\Errors;

final class Router_old

{
    public function run(){
        $url = substr($_SERVER['REQUEST_URI'], 1);

        if (strpos($url, "/") > 0){
            $arr = explode("/", $url);
            $controller_name = ucfirst($arr[0]);
            $action_name = $arr[1];
        }elseif(empty($url)){
            $controller_name = 'Main';
            $action_name = 'index';
        }else{
            $controller_name = $url;
        }

        $path = 'controllers\\'.$controller_name;

        if (!class_exists($path)) {
            Errors::controller();
            exit;
        }

        $controller = new $path();

        if(!method_exists($path, $action_name)){
            Errors::index();
            exit;
        }

        $controller->$action_name();
    }
}