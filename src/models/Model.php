<?php

namespace models;

class Model
{
    public function findOne(int $id): array{
        return $this->model;
    }

    public function findAll(): array{
        return $this->models;
    }

}