<?php

require_once ("../model/db.php");

class Itens extends db
{
    private $nome;
    private $preco;
    private $quantidade;


    public function setNome($string)
    {
        $this->nome = $string;
    }

    public function setPreco($string)
    {
        $this->preco = $string;
    }

    public function setQuantidade($string)
    {
        $this->quantidade = $string;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function addIten()
    {
        return $this->createIten($this->getNome(), $this->getPreco(), $this->getQuantidade());
    }
}


