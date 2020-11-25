<?php

class NoticiaRepository
{
    private $model;

    public function __construct(NoticiaModel $model)
    {
        $this->model = $model;
    }

}
