<?php
require_once 'partials/header.php';
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = (int) $_POST['id_musica'];

    delete($pdo, 'exercicio_playlist', "id_musica = $id");

    header('Location: index.php');

    exit;
}


$musica = read($pdo, 'exercicio_playlist', 'id_musica = ' . (int) $_GET['id']);

?>

<body>
    <section class="conteudo-pequeno">
        <div class="personalizacao-detmus">
            <h2 class="titulo-detmus">Detalhes da Música</h2>
            <div class="text-detmus">
                <?php
                print '
            <p><strong>Nome da Música:</strong> ' . $musica['nome_musica'] . '</p>
            <p><strong>Artista:</strong> ' . $musica['cantor_musica'] . '</p>
            <p><strong>Gênero Musical:</strong> ' . $musica['categoria_musica'] . '</p>
            <p><strong>Duração:</strong> ' . $musica['duracao_musica'] . '</p>'
                    ?>
            </div>
            <div class="botaoaa">
                <form method="POST">
                    <input type="hidden" name="id_musica" value="<?= $musica['id_musica'] ?>">
                    <a href="index.php" class="botao-detmus">Voltar</a>
                    <a href="atualizar_musica.php?id=<?= $musica['id_musica'] ?>" class="botao-detmus">Editar Música</a>
                    <button type="submit" class="botao-detmus">Excluir Música</button>
                </form>
            </div>
        </div>



    </section>
</body>