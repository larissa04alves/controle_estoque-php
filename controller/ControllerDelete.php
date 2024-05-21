<?php

require_once("../model/db.php");

class deleteController{
    private $delete;

    public function __construct($id){
        $this->delete = new db();
        if($this->delete->deleteIten($id) == true){
            echo "Item deletado com sucesso!";
        }else{
            echo "Erro ao deletar item!";
        }   
    }
}
new deleteController($_GET['id']);
?>
