<?php
require_once 'init.php';

$id = $_GET['id'];
$faixa = read($pdo, 'faixas', "id = $id");

if ($_POST) {
    $data = [
        'artista' => $_POST['artista'],
        'titulo' => $_POST['titulo'],
        'genero' => $_POST['genero']
    ];

    update($pdo, 'faixas', $data, "id = $id");
    header("Location: index.php");
    exit;
}
?>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class='container'>

<h1>Editar Música</h1>

<form method="POST">
    Artista: <input type="text" name="artista" value="<?= $faixa['artista'] ?>"><br>
    Título: <input type="text" name="titulo" value="<?= $faixa['titulo'] ?>"><br>
    Gênero: <input type="text" name="genero" value="<?= $faixa['genero'] ?>"><br>

    <button type="submit">Atualizar</button>
</form>

    </div>
</body>