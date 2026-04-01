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
    include './partials/header.php';
    require 'data.php';
    ?>
    <section class="conteudo">
        <div class="lista-container">
            <ul>
                <?php
                foreach ($categorias as $kcat => $vcat) {
                    print '<li><a href="#">' . $vcat . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="produtos_populares_grid">
            <?php
            foreach ($produtos_base as $produto) {
                print '
                <a href="./detalhes_carmac.php" class="container_produtos_populares">
                <img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">
                <div class="text_produtos_populares">
                    <h2>' . $produto['nome'] . '</h2>
                    <p>' . $produto['descricao_longa'] . '</p>
                </div>
            </a>';
            }
            ?>
        </div>
    </section>
    <section class="container_formulario_pedido_geral">
        <div class="titulo_pagina">
            <h1>Quer provar nosso café? Contate-nos!</h1>
        </div>
        <form>
            <div class="container_formulario_pedido_bloco">
                <input type="text" placeholder="Nome">
                <input type="text" placeholder="Sobrenome">
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Senha">
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="number" placeholder="Telefone">
            </div>
            <div class="container_formulario_pedido_bloco">
                <select>
                    <option>Selecione a bebida</option>
                    <option>Caramel Macchiato</option>
                    <option>Caffè Mocha</option>
                    <option>Flat White</option>
                    <option>Cinnamon Dolce Latte</option>
                    <option>Capuccino</option>
                    <option>Chai Tea Latte</option>
                    <option>Espresso Macchiato</option>
                    <option>Iced Caramel Macchiato</option>
                    <option>Vanilla Sweet Cream Cold Brew</option>
                </select>
                <input type="number" placeholder="Quantidade">
            </div>
            <div class="container_formulario_pedido_bloco">
                <textarea placeholder="Quer algum detalhes especial? Conte-nos!"></textarea>
            </div>
            <label class="checkbox-linha">
                <input type="checkbox">
                <span>Aceito receber notícias do meu pedido pelo meu email</span>
            </label>
            <label class="checkbox-linha">
                <input type="checkbox">
                <span>Aceito receber promoções e ofertas em meu email</span>
            </label>
            <div class="container_formulario_pedido_bloco">
                <button type="reset"><b>Limpar</b></button>
                <button type="submit"><b>Enviar</b></button>
            </div>
        </form>
    </section>
</body>

</html>