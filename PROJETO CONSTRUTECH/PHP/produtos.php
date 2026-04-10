<html>

<head>
    <meta charset="UTF-8">
    <title>PRODUTOS</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include './partials/header.php';
    require 'init.php';
    require 'data.php';

    $categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';

    ?>
    <section class="conteudo">
        <div class="container_conteudo_filtros">
            <ul>
                <li><a href="produtos.php">Todos</a></li>
                <?php
                foreach ($categorias as $kcat => $vcat) {
                    print '<li><a href="produtos.php?categoria=' . $kcat . '"">' . $vcat . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <table class="container_conteudo_planilha_produto">
            <tr class="container_planilha_produto_especificações">
                <th>ID</th>
                <th>NOME</th>
                <th>MARCA</th>
                <th>QTD MÍNIMA</th>
                <th>QTD ATUAL</th>
                <th>PREÇO UN</th>
                <th>PREÇO TOTAL</th>
            </tr>
            <?php
            foreach ($_SESSION['produtos'] as $produto) {
                if ($categoria_get === '' || $produto['categoria'] === $categoria_get) {
                    if ($produto['quantidade_atual'] < $produto['quantidade_minima']) {
                        print '
                    <tr class="container_planilha_produto_dados">
                        <td>' . $produto['id'] . '</td>
                        <td><a href="especificacoes_produtos.php?id='. $produto['id'] . '">' . $produto['nome'] . '</a></td>
                        <td>' . $produto['marca'] . '</td>
                        <td>' . $produto['quantidade_minima'] . ' UN</td>
                        <td class="texto_vermelho">' . $produto['quantidade_atual'] . ' UN</td>
                        <td>R$' . $produto['preco_unitario'] . '</td>
                        <td>R$' . $produto['preco_unitario'] * $produto['quantidade_atual'] . '</td>
                    </tr>';
                    } else {
                        print '
                    <tr class="container_planilha_produto_dados">
                        <td>' . $produto['id'] . '</td>
                        <td><a href="especificacoes_produtos.php?id='. $produto['id'] . '">' . $produto['nome'] . '</a></td>
                        <td>' . $produto['marca'] . '</td>
                        <td>' . $produto['quantidade_minima'] . ' UN</td>
                        <td>' . $produto['quantidade_atual'] . ' UN</td>
                        <td>R$' . $produto['preco_unitario'] . '</td>
                        <td>R$' . $produto['preco_unitario'] * $produto['quantidade_atual'] . '</td>
                    </tr>';
                    }
                }

            }
            ?>
        </table>
    </section>
</body>

</html>