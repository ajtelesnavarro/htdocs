<?php
require_once 'crud.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["acao"]) && $_POST["acao"] === "deletar") {

    $idCard = $_POST["id"];

    $deletado = delete($pdo, "cards", "id = $idCard");

    if ($deletado) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao deletar";
    }
}