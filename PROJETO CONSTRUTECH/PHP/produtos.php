<html>

<head>
    <meta charset="UTF-8">
    <title>PRODUTOS</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
<?php
require_once 'partials/header.php';
require 'init.php';

$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
$busca_get = isset($_GET['busca']) ? trim($_GET['busca']) : '';
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

if ($pagina_atual < 1) {
    $pagina_atual = 1;
}

$itens_por_pagina = 10;
?>

<section class="conteudo">

    <div class="container_conteudo_filtros">
        <ul>
            <li><a href="produtos.php">Todos</a></li>
            <?php
            foreach ($categorias as $kcat => $vcat) {
                echo '<li><a href="produtos.php?categoria=' . $kcat . '">' . $vcat . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <form method="GET" class="busca_marca_produto">
        <input type="text" name="busca" placeholder="Pesquisar produtos ou marcas..." value="<?php echo htmlspecialchars($busca_get); ?>">
        <input type="hidden" name="categoria" value="<?php echo htmlspecialchars($categoria_get); ?>">
        <button type="submit">Pesquisar</button>
    </form>

    <?php

    $produtos_filtrados = [];

    foreach ($_SESSION['produtos'] as $produto) {
        $filtro_categoria = ($categoria_get === '' || $produto['categoria'] === $categoria_get);

        $filtro_busca = (
            $busca_get === '' ||
            strpos(strtolower($produto['nome']), strtolower($busca_get)) !== false ||
            strpos(strtolower($produto['marca']), strtolower($busca_get)) !== false
        );

        if ($filtro_categoria && $filtro_busca) {
            $produtos_filtrados[] = $produto;
        }
    }

    $total_produtos = count($produtos_filtrados);
    $total_paginas = ceil($total_produtos / $itens_por_pagina);

    $inicio = ($pagina_atual - 1) * $itens_por_pagina;

    $produtos_pagina = array_slice($produtos_filtrados, $inicio, $itens_por_pagina);

    $total_qtd_atual = 0;
    $total_preco_total = 0;

    foreach ($produtos_filtrados as $produto) {
        $total_qtd_atual += $produto['quantidade_atual'];
        $total_preco_total += $produto['preco_unitario'] * $produto['quantidade_atual'];
    }
    ?>

    <table class="container_conteudo_planilha_produto">
        <tr class="container_planilha_produto_especificações">
            <th>ID</th>
            <th>NOME</th>
            <th>MARCA</th>
            <th>QTD ATUAL</th>
            <th>PREÇO UN</th>
            <th>PREÇO TOTAL</th>
        </tr>

        <?php
        foreach ($produtos_pagina as $produto) {

            $preco_total = $produto['preco_unitario'] * $produto['quantidade_atual'];

            if ($produto['quantidade_atual'] < $produto['quantidade_minima']) {
                echo '
                <tr class="container_planilha_produto_dados">
                    <td>' . $produto['id'] . '</td>
                    <td><a href="especificacoes_produtos.php?id=' . $produto['id'] . '">' . $produto['nome'] . '</a></td>
                    <td>' . $produto['marca'] . '</td>
                    <td class="texto_vermelho">' . $produto['quantidade_atual'] . ' UN</td>
                    <td>R$' . number_format($produto['preco_unitario'], 2, ',', '.') . '</td>
                    <td>R$' . number_format($preco_total, 2, ',', '.') . '</td>
                </tr>';
            } else {
                echo '
                <tr class="container_planilha_produto_dados">
                    <td>' . $produto['id'] . '</td>
                    <td><a href="especificacoes_produtos.php?id=' . $produto['id'] . '">' . $produto['nome'] . '</a></td>
                    <td>' . $produto['marca'] . '</td>
                    <td>' . $produto['quantidade_atual'] . ' UN</td>
                    <td>R$' . number_format($produto['preco_unitario'], 2, ',', '.') . '</td>
                    <td>R$' . number_format($preco_total, 2, ',', '.') . '</td>
                </tr>';
            }
        }
        ?>

        <tr class="container_planilha_produto_rodape">
            <td colspan="3">TOTAL</td>
            <td><?php echo $total_qtd_atual; ?> UN</td>
            <td></td>
            <td>R$<?php echo number_format($total_preco_total, 2, ',', '.'); ?></td>
        </tr>
    </table>

    <div class="paginacao">
        <h3>Páginas:</h3>
        <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
            <a href="?pagina=<?php echo $i; ?>&categoria=<?php echo $categoria_get; ?>&busca=<?php echo $busca_get; ?>">
                <?php echo $i; ?>
            </a>
        <?php } ?>
    </div>

</section>

</body>
</html>