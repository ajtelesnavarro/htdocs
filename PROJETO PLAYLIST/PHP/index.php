<?php
require_once 'partials/header.php';
require_once 'crud.php';

$pesquisa = $_GET['pesquisa'] ?? '';

$sql = "
SELECT * FROM exercicio_playlist
WHERE nome_musica LIKE '%$pesquisa%'
OR cantor_musica LIKE '%$pesquisa%'
";

$resultado = $pdo->query($sql);

$musicas = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>


<body>
    <section class="conteudo">
        <form class="filtros-container" method="GET">
            <input type="text" name="pesquisa" placeholder="Pesquisar por nome da música ou artista">
            <button type="submit">Pesquisar</button>
        </form>
        <table class="tabela-container" border="1">
            <tr>
                <th>Nome da Música</th>
                <th>Artista</th>
                <th>Gênero Musical</th>
                <th>Duração</th>
            </tr>

<?php foreach ($musicas as $musica) {
    print'            <tr>
                <td><a href="detalhe_musica.php?id='. $musica['id_musica'] . '" class="botao-msc">' . $musica['nome_musica'] . '</td>
                <td>' . $musica['cantor_musica'] . '</td>
                <td>' . $musica['categoria_musica'] . '</td>
                <td>' . $musica['duracao_musica'] . '</td>
            </tr>';
};
            print'</table>
    </section>
</body>';

?>