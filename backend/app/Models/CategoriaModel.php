<?php

class CategoriaModel extends Model
{
    private $entity;
    private $tabela = 'noticia';

    public function __construct(CategoriaEntity $entity)
    {
        $this->entity = $entity;
    }

    public function find($id)
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
