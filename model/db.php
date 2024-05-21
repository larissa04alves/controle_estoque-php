<?php

require_once('../connection/conn.php');

class db {
    private $pdo;

    public function __construct() {
        $this->pdo = $GLOBALS['pdo'];
    }

    public function createIten($nome, $preco, $quantidade) {
        $stmt = $this->pdo->prepare("INSERT INTO itens (nome, preco, quantidade) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $nome, PDO::PARAM_STR);
        $stmt->bindValue(2, $preco, PDO::PARAM_STR);
        $stmt->bindValue(3, $quantidade, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function listIten() {
        $stmt = $this->pdo->query("SELECT * FROM itens");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateIten($nome, $preco, $quantidade, $id) {
        $stmt = $this->pdo->prepare("UPDATE itens SET nome = ?, preco = ?, quantidade = ? WHERE id = ?");
        $stmt->bindValue(1, $nome, PDO::PARAM_STR);
        $stmt->bindValue(2, $preco, PDO::PARAM_STR);
        $stmt->bindValue(3, $quantidade, PDO::PARAM_INT);
        $stmt->bindValue(4, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function deleteIten($id) {
        $stmt = $this->pdo->prepare("DELETE FROM itens WHERE id = ?");
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function searchIten($nome) {
        $stmt = $this->pdo->prepare("SELECT * FROM itens WHERE nome = ?");
        $stmt->bindValue(1, $nome, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
