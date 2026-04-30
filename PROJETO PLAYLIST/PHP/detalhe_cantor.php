<?php
require_once 'partials/header.php';
require_once 'crud.php';

$artista = $_GET['artista'] ?? '';

$musicas = readAll(
    $pdo,
    'exercicio_playlist',
    "cantor_musica = '$artista'"
);
?>

<section class="conteudo-pequeno">
    <div class="personalizacao-detcan">
        <p class="text-detcan">Músicas de:</p>
        <h1 class="titulo-detcan"><?= $artista ?></h1>

        <?php foreach ($musicas as $musica): ?>

            <div>
                <p class="text-detcan">→ <?= $musica['nome_musica'] ?></p>
            </div>

        <?php endforeach; ?>
        <div class="botaoaa">
            <a href="index.php" class="botao-detcan">Voltar</a>
        </div>
        
    </div>
</section>