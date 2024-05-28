<?php
// Database configuration
define("HOST", "localhost");
define("USER", "postgres");
define("PASS", "admin");
define("DATABASE", "estoque-db");
define("PORT", "5431");

try {
    //connection postgres
    $pdo = new PDO("pgsql:host=" . HOST . ";port=" . PORT . ";dbname=" . DATABASE . ";user=" . USER . ";password=" . PASS);

    // Configurar o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
}
?>