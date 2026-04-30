<?php
require_once 'partials/header.php';
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_musica = $_POST['nome_musica'];
    $cantor_musica = $_POST['cantor_musica'];
    $categoria_musica = $_POST['categoria_musica'];
    $duracao_musica = $_POST['duracao_musica'];

    create($pdo, 'exercicio_playlist', [
        'nome_musica' => $nome_musica,
        'cantor_musica' => $cantor_musica,
        'categoria_musica' => $categoria_musica,
        'duracao_musica' => $duracao_musica
    ]);

    header('Location: index.php');
    exit;
}
?>
<section class="conteudo-pequeno">
    <div class="personalizacao-admus">
        <h2 class="titulo-admus">Adicionar Música</h2>
        <div class="text-admus">
            <p>Preencha os campos abaixo para adicionar uma nova música à sua playlist.</p>
        </div>
        <form class="form-admus" method="post">
            <input type="text" name="nome_musica" placeholder="Nome (Ex: Bohemian Rhapsody)" class="form-nome_musica">
            <div class="columaform-admus">
                <input type="text" name="cantor_musica" placeholder="Artista (Ex: Queen)">
                <input type="text" name="categoria_musica" placeholder="Gênero Musical (Ex: Rock)">
            </div>
            <input type="text" name="duracao_musica" placeholder="Duração (Ex: 5:55)">
            <button type="submit" class="botao-admus">Adicionar Música</button>
        </form>
    </div>

</section>