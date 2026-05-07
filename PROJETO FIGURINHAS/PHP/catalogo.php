<?php

require_once 'crud.php';

$figurinhas = readAll($pdo, 'exercicio_figurinha');

$membros = [
    'Todos',
    'RM',
    'Jin',
    'Suga',
    'J-hope',
    'Jimin',
    'Taehyung',
    'Jungkook',
    'Mais de um'
];

?>

<head>
    <title>Catálogo de Photocards</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <section class="conteudo">

        <div class="inicio">
            <h1>Catálogo de Photocards</h1>
            <a href="form.php" class="button">Adicionar Photocard</a>
        </div>
        <div class="container-filtros">
            <h2>Filtragem por Membro(s)</h2>
            <ul>
                <?php foreach ($membros as $membro) { ?>
                    <li><a href="catalogo.php?membro=<?= $membro ?>" class="button-filtro"><?= $membro ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <?php
        if (isset($_GET['membro'])) {
            $membro = $_GET['membro'];
            $figurinhas = readAll($pdo, 'exercicio_figurinha', "membro = '$membro'");
        } else {
            $figurinhas = readAll($pdo, 'exercicio_figurinha');
        }
        ?>
        </div>


        <div class="catalogo">

            <?php foreach ($figurinhas as $figurinha) { ?>

                <div class="card">

                    <h2>Card de <?= $figurinha['membro'] ?> (<?= $figurinha['era'] ?>)</h2>

                    <div class="conteudo-card">
                        <div class="container-img-card">
                            <img src="<?= $figurinha['foto'] ?>" alt="Foto da figurinha" class="img-card">
                        </div>

                        <div class="container-text-card">
                            <p class="text-card"><strong>Membro:</strong> <?= $figurinha['membro'] ?></p>

                            <p class="text-card"><strong>Era:</strong> <?= $figurinha['era'] ?></p>

                            <p class="text-card"><strong>Raridade:</strong> <?= $figurinha['raridade'] ?></p>

                            <p class="text-card"><strong>Preço:</strong> R$ <?= $figurinha['preco'] ?></p>

                            <a href="select.php?id=<?= $figurinha['id'] ?>" class="button">
                                Ver mais
                            </a>
                        </div>

                    </div>
                </div>

            <?php } ?>

        </div>

    </section>

</body>