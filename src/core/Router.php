<?php

namespace core;

final class Router
{
    public function run(){
        echo $_SERVER['REQUEST_URI'];
    }
}