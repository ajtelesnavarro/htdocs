<?php
require_once 'partials/header.php';
require_once 'crud.php';

$pesquisa = $_GET['pesquisa'] ?? '';

if ($pesquisa) {
    $where = "nome_musica LIKE '%$pesquisa%' 
    OR cantor_musica LIKE '%$pesquisa%'";
} else {
    $where = '';
}

$musicas = readAll($pdo, 'exercicio_playlist', $where);
?>

<body>
    <section class="conteudo">
        <form class="filtros-container" method="GET">
            <input type="text" name="pesquisa" placeholder="Pesquisar por nome da música ou artista">
            <button type="submit">
                Pesquisar
            </button>
        </form>
        <table class="tabela-container" border="1">
            <tr>
                <th>Nome da Música</th>
                <th>Artista</th>
                <th>Gênero Musical</th>
                <th>Duração</th>
            </tr>

            <?php

            foreach ($musicas as $musica) {
                print '
                <tr>
                    <td class="td-link">
                        <a href="detalhe_musica.php?id=' . $musica['id_musica'] . '" class="botao-msc">
                            ' . $musica['nome_musica'] . '
                        </a>
                    </td>
                    <td>
                        <a href="detalhe_cantor.php?artista=' . urlencode($musica['cantor_musica']) . '" class="botao-msc">
                            ' . $musica['cantor_musica'] . '
                        </a>
                    </td>
                    <td>' . $musica['categoria_musica'] . '</td>
                    <td>' . $musica['duracao_musica'] . '</td>
                </tr>
                ';
            }

            ?>
        </table>
    </section>
</body>