<?php
require_once './init.php';

$categoria_get = isset($_GET['especialidade']) ? trim($_GET['especialidade']) : '';
$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

if ($pagina_atual < 1) {
    $pagina_atual = 1;
}

$itens_por_pagina = 12;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ids = array_column($_SESSION['fornecedores'], 'id_2');
    $Idfornecedor = $ids ? max($ids) + 1 : 1;

    $_SESSION['fornecedores'][] = [
        'id_2' => $Idfornecedor,
        'fornecedor' => $_POST['fornecedor'],
        'especialidade' => $_POST['especialidade'],
        'marca_principal' => $_POST['marca_principal'],
        'troca_devolucao' => $_POST['troca_devolucao'],
        'prazo_entrega' => $_POST['prazo_entrega'],
    ];

    header('Location: fornecedores.php?fornecedoresadd=1');
    exit;
}
?>

<!DOCTYPE html>
<html lang="br-pt">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Outfit:wght@100..900&family=Palette+Mosaic&family=Wellfleet&display=swap" rel="stylesheet">
    <title>Fornecedores</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

<?php require_once 'partials/header.php'; ?>

<main>
<section class="conteudo">

    <div class="container_conteudo_filtros">
        <ul>
            <li><a href="fornecedores.php">Todos</a></li>
            <?php
            foreach ($categorias_fornecedores as $kcatfor => $vcatfor) {
                echo '<li><a href="fornecedores.php?especialidade=' . $kcatfor . '">' . $vcatfor . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <?php
    $fornecedores_filtrados = [];

    foreach ($_SESSION['fornecedores'] as $fornecedor) {
        if (
            $categoria_get === '' ||
            strtolower(trim($fornecedor['especialidade'])) === strtolower(trim($categoria_get))
        ) {
            $fornecedores_filtrados[] = $fornecedor;
        }
    }

    $total_fornecedores = count($fornecedores_filtrados);
    $total_paginas = ceil($total_fornecedores / $itens_por_pagina);

    $inicio = ($pagina_atual - 1) * $itens_por_pagina;

    $fornecedores_pagina = array_slice($fornecedores_filtrados, $inicio, $itens_por_pagina);
    ?>

    <div class="fornecedores_grid">
        <?php
        foreach ($fornecedores_pagina as $fornecedor) {
            echo '
            <div class="container_fornecedores">
                <a href="detalhe_fornecedor.php?id=' . $fornecedor['id_2'] . '" class="container_fornecedores_dados">
                    <h2>' . $fornecedor['fornecedor'] . '</h2>
                    <h3>' . $fornecedor['marca_principal'] . '</h3>
                    <h3>' . ($fornecedor['cnpj'] ?? '') . '</h3>
                    <p class="container_fornecedores_linha">________________________</p>
                </a>
                <a href="#" class="container_fornecedores_rastreio">
                    <p>Link de Rastreio</p>
                </a>
            </div>';
        }
        ?>
    </div>

    <div class="paginacao">
        <h3>Páginas:</h3>

        <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
            <a href="?pagina=<?php echo $i; ?>&especialidade=<?php echo $categoria_get; ?>">
                <?php echo $i; ?>
            </a>
        <?php } ?>
    </div>

</section>
</main>

</body>
</html>