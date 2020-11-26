<?php

class NoticiaRepository
{
    private $model;

    public function __construct(Noticia $model)
    {
        $this->model = $model;
    }

}
