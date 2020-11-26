<?php

class Model extends Connection
{
    protected $conn;
    protected $tabela;

    public function __construct()
    {
        $this->conn = $this->getConnection();

        if (is_null($this->tabela)) {
            $this->tabela = strtolower(get_called_class());
        }

    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

}
