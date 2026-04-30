<?php
require_once 'partials/header.php';
require_once 'crud.php';

$musica = read($pdo, 'exercicio_playlist', 'id_musica = ' . (int) $_GET['id']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = (int) $_GET['id'];
    $nome_musica = $_POST['nome_musica'];
    $cantor_musica = $_POST['cantor_musica'];
    $categoria_musica = $_POST['categoria_musica'];
    $duracao_musica = $_POST['duracao_musica'];

    update($pdo, 'exercicio_playlist', [
        'nome_musica' => $nome_musica,
        'cantor_musica' => $cantor_musica,
        'categoria_musica' => $categoria_musica,
        'duracao_musica' => $duracao_musica
    ], "id_musica = $id");

    header('Location: index.php');
    exit;
}

print'
<section class="conteudo-pequeno">
    <div class="personalizacao-admus">
        <h2 class="titulo-admus">Atualizar Música</h2>
        <div class="text-admus">
            <p>Preencha os campos abaixo para atualizar a música na qual você selecionou.</p>
        </div>
        <form class="form-admus" method="post">
            <input type="text" name="nome_musica" placeholder="' . $musica['nome_musica'] . '" class="form-nome_musica">
            <div class="columaform-admus">
                <input type="text" name="cantor_musica" placeholder="' . $musica['cantor_musica'] . '">
                <input type="text" name="categoria_musica" placeholder="' . $musica['categoria_musica'] . '">
            </div>
            <input type="text" name="duracao_musica" placeholder="' . $musica['duracao_musica'] . '">
            <button type="submit" class="botao-admus">Adicionar Música</button>
        </form>
    </div>

</section>';

?>