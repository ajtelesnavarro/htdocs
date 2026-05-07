<?php

require_once 'crud.php';

$id = $_GET['id'];

delete($pdo, 'exercicio_figurinha', "id = $id");

header('Location: catalogo.php');
exit;