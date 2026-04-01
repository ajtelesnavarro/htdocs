<html>

<head>
    <meta charset="UTF-8">
    <title>STARBUCKS</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    require 'partials/header.php';

    print_r($_POST);
    ?>
    <section class="conteudo_index">
        <div class="titulo_section_index">
            <h2>Cadastre seu produto</h2>
        </div>
        <form action="cadastrar_produtos.php" method="post">
            <div class="container_formulario_pedido_bloco">
                <input type="text" name="nome" placeholder="Nome do produto">
                <div class="container_formulario_pedido_bloco">
                    <textarea name="descricao_produto" placeholder="Descrição do produto"></textarea>
                </div>
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="text" name="nome_cadastrante" placeholder="Nome do cadastrante">
                <input type="password" name="senha_cadastrante" placeholder="Senha do cadastrante">
            </div>
            <div class="container_formulario_pedido_bloco">
                <select name="categoria">
                    <option>Selecione o tipo de bebida</option>
                    <option>Bebida Quente</option>
                    <option>Bebida Gelada</option>
                </select>
                <input type="number" name="quantidade" placeholder="Quantidade">
            </div>
            <div class="container_formulario_pedido_bloco">
                <button type="reset"><b>Limpar</b></button>
                <button type="submit"><b>Enviar</b></button>
            </div>
        </form>
    </section>
</body>

</html>