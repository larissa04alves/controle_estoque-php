<?php

require_once("../model/Itens.php");

class insertController{
    private $register;

    public function __construct(){
        $this->register = new Itens();
        $this->addIten();
    }

    private function addIten(){
        $this->register->setNome($_POST['nome']);
        $this->register->setPreco($_POST['preco']);
        $this->register->setQuantidade($_POST['quantidade']);
        $this->register->addIten();
        $result=$this->register->addIten();
        if($result){
            echo "Item inserido com sucesso!";
        }else{
            echo "Erro ao inserir item!";
        }
    }
}

new insertController();
?>