<?php

class NoticiaModel extends Model
{
    private $entity;
    private $tabela = 'noticia';

    public function __construct(NoticiaEntity $entity)
    {
        parent::__construct();
        $this->entity = $entity;
    }

    public function find(int $id)
    {
        try {
            $query = "select * from $this->tabela where id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        } finally {
            $this->closeAll();
        }

    }

}
