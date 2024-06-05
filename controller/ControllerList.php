<?php

require_once ("../model/db.php");

//Aqui é a classe que controla a listagem dos itens
class listController
{
    private $list;

    public function __construct()
    {
        $this->list = new db();
    }

    //Função que retorna os itens
    public function getItens()
    {
        $result = $this->list->listIten();
        if ($result) {
            return $result;
        } else {
            $itens = array();
            return $itens;
        }
    }
}

