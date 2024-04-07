<?php


namespace controllers;

use core\Viewer;
use models\Posts;

class Main
{
    public function __construct(array $url){
        $model = new Posts();
        $connect = new Connect();
        $connection = $connect->getConnect();
        $sql = $connection->query('SELECT * FROM `user`');
        $sql->execute();
        $result = $sql->fetchAll($connection::FETCH_ASSOC);
        var_dump($result); // так все работает
        $data['posts'] = $model->findAll();
        Viewer::view($url, $data);
    }
}
