<?php
require_once './init.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$ids = array_column($_SESSION['fornecedores'], 'id_2');

$index = array_search($id, $ids);

if ($index !== false) {

    $fornecedor = $_SESSION['fornecedores'][$index];
} else {
    header('Location: 404.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="br-pt">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Electrolize&family=Outfit:wght@100..900&family=Palette+Mosaic&family=Wellfleet&display=swap"
        rel="stylesheet">
    <title>Detalhe do fornecedor: <?php echo $fornecedor['fornecedor']; ?></title>
    <link rel="stylesheet" href="../CSS/style.CSS">
</head>

<body>
    <?php
    require_once 'partials/header.php';
    ?>


    <main class="conteudo_fornecedor">
        <form action="detalhe_fornecedor.php?id=<?php echo $fornecedor['id_2']; ?>" method="POST"></form>
        <h1 class="titulo_fornecedor">Detalhe do fornecedor: <?php echo $fornecedor['fornecedor']; ?> </h1>
        <div class="mini-grid">
            <section class="card">
                <div class="grid-title">
                    <h3>Informações Básicas:</h3>
                </div>

                <div class="grid-info">

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/marcas.png" class="img_fornecedor" />
                        <p> <span>Marcas principais:</span> <?php echo $fornecedor['marca_principal']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/razao_social.png" class="img_fornecedor" />
                        <p> <span>Razão social:</span> <?php echo $fornecedor['razao_social']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/cnpj.png" class="img_fornecedor" />
                        <p> <span>CNPJ:</span> <?php echo $fornecedor['cnpj']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/endereco.png" class="img_fornecedor" />
                        <p> <span>Endereço:</span> <?php echo $fornecedor['endereco']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/nome.png" class="img_fornecedor" />
                        <p> <span>Vendedor:</span> <?php echo $fornecedor['nome_consultor']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/email_pedido.png" class="img_fornecedor" />
                        <p> <span>E-mail:</span> <?php echo $fornecedor['email']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/comercial.png" class="img_fornecedor" />
                        <p> <span>Telefone:</span> <?php echo $fornecedor['contato']; ?></p>
                    </div>
                </div>
            </section>
            <section class="card">
                <div class="grid-title">
                    <h3>Observações:</h3>
                </div>

                <div class="grid-info">

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/pagamento.png" class="img_fornecedor" />
                        <p> <span>Condição de pagamento:</span> <?php echo $fornecedor['pagamento_condicacao']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/pedido_min.png" class="img_fornecedor" />
                        <p> <span>Pedido minimo:</span> <?php echo $fornecedor['pedido_min']; ?></P>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/confiabilidade.png" class="img_fornecedor" />
                        <p> <span>Confiabilidade:</span> <?php echo $fornecedor['confiabilidade']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/prazo_entrega.png" class="img_fornecedor" />
                        <p> <span>Prazo de entrega:</span> <?php echo $fornecedor['prazo_entrega']; ?></p>
                    </div>

                    <div class="text_image_info">
                        <img src="../IMAGENS/DETALHES FORNECEDOR/check.png" class="img_fornecedor" />
                        <p> <span>Aceitação de trocas / Devolução:</span> <?php echo $fornecedor['troca_devolucao']; ?>
                        </p>
                    </div>
            </section>
        </div>
        </div>
        <section class="redirecionamento_fornecedor">
            <h3>Retornar a pagina fornecedores:</h3>
            <a href="./fornecedores.php" class="voltar_btn">Voltar</a>
        </section>
        </form>
    </main>
</body>

</html>