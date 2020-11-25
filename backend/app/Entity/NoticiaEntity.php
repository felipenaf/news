<?php

class NoticiaEntity
{
    private $id;
    private $titulo;
    private $conteudo;
    private $categoria;

    public function __construct($titulo, $conteudo, CategoriaEntity $categoria)
    {
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
        $this->categoria = $categoria;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get the value of conteudo
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set the value of conteudo
     *
     * @return  self
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    public function setCategoria(CategoriaEntity $categoria)
    {
        $this->categoria = $categoria;
    }

}
