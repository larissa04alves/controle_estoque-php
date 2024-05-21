<?php

require_once("../model/db.php");

class listController {
    private $list;

    public function __construct(){
        $this->list = new db();
    }

    public function getItens() {
        return $this->list->listIten();
    }
}
?>
