<?php

class Noticia extends Model
{
    protected $id;
    protected $titulo;
    protected $conteudo;
    protected $categoria;

    public function __construct($titulo = null, $conteudo = null, Categoria $categoria = null)
    {
        parent::__construct();
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
        $this->categoria = $categoria;
    }

    public function __get($attribute)
    {
        if ($attribute == 'titulo') {
            return '|| -> XX ' . $this->$attribute . ' XX <- ||';
        }

        return $this->$attribute;
    }

    public function find(int $id)
    {
        try {
            $query = "
                select n.*
                from $this->tabela n
                inner join categoria c on c.id = n.categoria_id
                where n.id = :id
            ";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $noticia = $stmt->fetch();

            $categoria = new Categoria();
            $noticia->categoria = $categoria->find($noticia->categoria_id);

            return $noticia;
        } catch (\Throwable $th) {
            return $th->getMessage();
        } finally {
            $this->closeAll();
        }

    }

    public function all()
    {
        try {
            $stmt = $this->conn->query("select * from $this->tabela");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            return $th->getMessage();
        } finally {
            $this->closeAll();
        }

    }

}
