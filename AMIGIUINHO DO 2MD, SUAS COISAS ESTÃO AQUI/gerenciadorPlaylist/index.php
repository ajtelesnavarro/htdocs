<?php
require_once 'init.php';


$faixas = readAll($pdo, 'faixas');

// DELETE
if ($_POST && isset($_POST['acao']) && $_POST['acao'] == 'deletar') {
    $id = $_POST['id'];
    delete($pdo, 'faixas', "id = $id");
    header("Location: index.php");
    exit;
}
?>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class='container'>

<h1>Playlist</h1>

<a href="newSong.php">Adicionar Música</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Artista</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Álbum</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($faixas as $faixa): ?>
    <tr>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $faixa['id'] ?>">

            <td><?= $faixa['id'] ?></td>
            <td><?= $faixa['artista'] ?></td>
            <td><?= $faixa['titulo'] ?></td>
            <td><?= $faixa['genero'] ?></td>
            <td><?= $faixa['album'] ?></td>

            <td>
                <a class="edit-link" href="editSong.php?id=<?= $faixa['id'] ?>">Editar</a>
                <button type="submit" name="acao" value="deletar">Deletar</button>
            </td>
        </form>
    </tr>
    <?php endforeach; ?>
</table>

    </div>
</body>