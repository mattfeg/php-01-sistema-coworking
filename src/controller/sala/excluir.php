<?php

$id = $_GET['id'] ?? null;

// faz o DELETE
if ($id) {
    $database = require("../src/conexao.php");

    $query = $database->prepare("DELETE FROM tb_sala WHERE id = :id");
    $query->execute([':id' => $id]);
}

exit(header('location: /salas/listar'));
