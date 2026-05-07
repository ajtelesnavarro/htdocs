<?php
require_once 'init.php';

if ($_POST) {
    $data = [
        'artista' => $_POST['artista'],
        'titulo' => $_POST['titulo'],
        'genero' => $_POST['genero']
    ];

    create($pdo, 'faixas', $data);
    header("Location: index.php");
    exit;
}
?>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">

<h1>Nova Música</h1>

<form method="POST">
    Artista: <input type="text" name="artista" required><br>
    Título: <input type="text" name="titulo" required><br>
    Gênero: <input type="text" name="genero" required><br>
    Álbum: <input type="text" name="album"><br>

    <button type="submit">Salvar</button>
</form>
   
    </div>
</body>