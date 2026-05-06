<?php

require_once 'crud.php';

$figurinha = read($pdo, 'exercicio_figurinha', "id = " . $_GET['id']);

?>

<?php if ($figurinha) { ?>

    <head>
        <title>Figurinha de <?= $figurinha['membro'] ?></title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <section class="conteudo">
            <h2>Figurinha de <?= $figurinha['membro'] ?></h2>
            <div class="grid-conteudo">
                <div class="container">
                    <p><strong>ID: </strong><?= $figurinha['id'] ?></p>
                    <p><strong>Membro: </strong><?= $figurinha['membro'] ?></p>
                    <p><strong>Era: </strong><?= $figurinha['era'] ?></p>
                    <p><strong>Raridade: </strong><?= $figurinha['raridade'] ?></p>
                    <p><strong>É oficial? </strong><?= $figurinha['oficial'] ?></p>
                    <p><strong>Preço: </strong><?= $figurinha['preco'] ?></p>
                </div>
                <img src="<?= $figurinha['foto'] ?>" alt="Imagem da figurinha" width="200">
            </div>

            <a href="update.php?id=<?= $figurinha['id'] ?>" class="button">
                Editar Figurinha
            </a>
            <a href="delete.php?id=<?= $figurinha['id'] ?>" class="button">
                Deletar Figurinha
            </a>
        </section>
    </body>

<?php } else { ?>

    <p>Figurinha não encontrada.</p>

<?php } ?>