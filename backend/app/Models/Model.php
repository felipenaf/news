<?php

class Model extends Connection
{
    protected $conn;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

}
