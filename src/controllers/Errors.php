<?php


namespace controllers;


class Errors
{
    static public function controller(){
        echo 'Controller не найден';
    }

    static public function index(){
        echo 'Action не найден';
    }
}