<?php

class Categoria extends Model
{
    protected $id;
    protected $nome;

    public function __construct($nome = null)
    {
        parent::__construct();
        $this->nome = $nome;
    }

    public function find(int $id)
    {
        try {
            $query = "select * from $this->tabela where id = :id";
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

    }

}
