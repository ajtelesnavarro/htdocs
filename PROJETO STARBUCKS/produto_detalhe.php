<?php
require_once 'init.php';
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
    <title>Produtos | STARBUCKS</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    require_once 'partials/header.php';
    ?>
    <section class="conteudo_detalhes">
        <div class="detalhes_produto">
            <img src="<?php print $produto['imagem']; ?>" alt="<?php print $produto['nome']; ?>">
            <div class="text_detalhes_produto">
                <h2><?php print $produto['nome']; ?></h2>
                <p><?php print $produto['descricao_longa']; ?></p>
                <img src="./IMAGENS/detalhes/caramel_macchiato_esp_ofc.png" alt="<?php print $produto['nome']; ?>">
                <p><?php print $produto['descricao_longa2']; ?></p>
            </div>
        </div>
    </section>
</body>

</html>