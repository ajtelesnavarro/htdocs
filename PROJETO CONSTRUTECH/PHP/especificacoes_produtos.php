<?php
require 'data.php';
require 'init.php';
$id = isset($_GET['id']) ? (int) ($_GET['id']) : 0;
$ids = array_column($_SESSION['produtos'], 'id');
$index = array_search($id, $ids);
$produto = $_SESSION['produtos'][$index];

if($index !== false) {
    $produto = $_SESSION['produtos'][$index];
} else {
    print('Produto não existe!');
}

?>
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
    ?>
    <div class="produto_especificacoes">
        <div class="container_produto_especificacoes_imagem">
            <img src="../IMAGENS/PRODUTOS/'<?php print $produto['id']?>'.png" alt="<?php print $produto['nome']; ?>">
        </div>
        <div class="container_produto_especificacoes_dados">
            <form class="conteudo">
                <h2><?php print $produto['nome']?></h2>
                <p><span>Marca: </span><?php print $produto['marca']?></p>
                <p><span>Quantidade Mínima: </span><?php print $produto['quantidade_minima']?> UN</p>
                <p><span>Quantidade Atual: </span><?php print $produto['quantidade_atual']?> UN</p>
                <p><span>Preço Unitário: </span>R$<?php print $produto['preco_unitario']?></p>
                <p><span>Preço Total: </span>R$<?php print $produto['preco_unitario'] * $produto['quantidade_atual']?></p>
                <button type="submit" class="container_produto_especificacoes_botao">Enviar</button>
            </form>
        </div>

    </div>
</body>

</html>