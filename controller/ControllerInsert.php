<?php

require_once ("../model/Itens.php");

class insertController
{
    private $register;

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->register = new Itens();
            $this->addIten();
        }
    }

    //Função que adiciona um item
    private function addIten()
    {
        var_dump($_POST);
        $this->register->setNome($_POST['nome']);
        $this->register->setPreco($_POST['preco']);
        $this->register->setQuantidade($_POST['quantidade']);
        $result = $this->register->addIten();
        if ($result) {
            header("Location: ../view/index.php");
        } else {
            echo "Erro ao inserir produto";
        }
    }

}

//Aqui é onde é instanciado o objeto
new insertController();
