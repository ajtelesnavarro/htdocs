<?php

require_once 'crud.php';

$figurinha = read($pdo, 'exercicio_figurinha', "id = " . $_GET['id']);

?>

<?php if ($figurinha) { ?>

    <head>
        <title>Photocard de <?= $figurinha['membro'] ?></title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <section class="conteudo-select">
            <h2 class="select-title">Photocard de <?= $figurinha['membro'] ?></h2>
            <div class="grid-conteudo">
                <div class="container">
                    <p class="select-text"><strong>ID: </strong><?= $figurinha['id'] ?></p>
                    <p class="select-text"><strong>Membro: </strong><?= $figurinha['membro'] ?></p>
                    <p class="select-text"><strong>Era: </strong><?= $figurinha['era'] ?></p>
                    <p class="select-text"><strong>Raridade: </strong><?= $figurinha['raridade'] ?></p>
                    <p class="select-text"><strong>É oficial? </strong><?= $figurinha['oficial'] ?></p>
                    <p class="select-text"><strong>Preço: </strong><?= $figurinha['preco'] ?></p>
                </div>
                <img src="<?= $figurinha['foto'] ?>" alt="Imagem da figurinha" class="select-img">
            </div>

            <div class="grid">
                <a href="update.php?id=<?= $figurinha['id'] ?>" class="button">
                    Editar Figurinha
                </a>
                <a href="delete.php?id=<?= $figurinha['id'] ?>" class="button">
                    Deletar Figurinha
                </a>
            </div>
            <a href="catalogo.php" class="button">
                Ir para o Catálogo
            </a>
        </section>
    </body>

<?php } else { ?>

    <p>Figurinha não encontrada.</p>

<?php } ?>