<?php

require_once ("../model/db.php");

class editController
{
    private $edit;
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($id)
    {
        $this->edit = new db();
        $this->createForms($id);
    }

    private function createForms($id)
    {
        $row = $this->edit->searchIten($id);
        $this->nome = $row['nome'];
        $this->preco = $row['preco'];
        $this->quantidade = $row['quantidade'];
    }

    public function editForms($nome, $preco, $quantidade, $id)
    {
        if ($this->edit->updateIten($nome, $preco, $quantidade, $id) == true) {
            echo "Item editado com sucesso!";
        } else {
            echo "Erro ao editar item!";
        }
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
}

$id = filter_input(INPUT_GET, 'id');
$edit = new editController($id);
if (isset($_POST['submit'])) {
    $edit->editForms($_POST['nome'], $_POST['preco'], $_POST['quantidade'], $id);
}

?>