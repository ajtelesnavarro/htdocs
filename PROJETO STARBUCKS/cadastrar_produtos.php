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
    require 'init.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $ids = array_column($_SESSION['produtos'], 'id');
        $novo_id = $ids ? max($ids) + 1 : 1;
        // mesma coisa que: 
        //if ($ids) {
        //    $novo_id = max($ids) + 1;
        //} else {
        //    $novo_id = 1;
        //}

        $_SESSION['produtos'][] = [
            'id' => $novo_id,
            'nome' => $_POST['nome'],
            'categoria' => $_POST['categoria'],
            'preco' => $_POST['preco'],
            'descricao_longa' => $_POST['descricao_longa'],
            'descricao_longa2' => $_POST['descricao_longa2'],
            'descricao_curta' => $_POST['descricao_curta'],
            'imagem' => $_POST['imagem']
        ];
    }
    ?>
    <section class="conteudo_index">
        <div class="titulo_section_index">
            <h2>Cadastre seu produto</h2>
        </div>
        <form action="cadastrar_produtos.php" method="post">
            <div class="container_formulario_pedido_bloco">
                <input type="text" name="nome" placeholder="Nome do produto">
            </div>
            <div class="container_formulario_pedido_bloco">
                <div class="container_formulario_pedido_bloco">
                    <textarea name="descricao_curta" placeholder="Descrição do produto curta"></textarea>
                </div>
            </div>
            <div class="container_formulario_pedido_bloco">
                <div class="container_formulario_pedido_bloco">
                    <textarea name="descricao_longa" placeholder="Descrição do produto longa antes da especificação"></textarea>
                </div>
                <div class="container_formulario_pedido_bloco">
                    <textarea name="descricao_longa2" placeholder="Descrição do produto longa depois da especificação"></textarea>
                </div>
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="text" name="preco" placeholder="Preço">
            </div>
            <div class="container_formulario_pedido_bloco">
                <select name="categoria">
                    <option>Selecione o tipo de bebida</option>
                    <option value="bebida quente">Bebida Quente</option>
                    <option value="bebida fria">Bebida Fria</option>
                </select>
                <input type="number" name="quantidade" placeholder="Quantidade">
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="text" name="imagem" placeholder="URL ou caminho da imagem">
            </div>
            <div class="container_formulario_pedido_bloco">
                <button type="reset"><b>Limpar</b></button>
                <button type="submit"><b>Enviar</b></button>
            </div>
        </form>
    </section>
</body>

</html>