<?php

require_once ("../model/db.php");

class deleteController
{
    private $delete;

    public function __construct($id)
    {
        $this->delete = new db();
        if ($this->delete->deleteIten($id)) {
            header("Location: ../view/index.php");
            exit;
        } else {
            header("Location: ../view/index.php");
            exit;
        }
    }
}

new deleteController($_GET['id']);

