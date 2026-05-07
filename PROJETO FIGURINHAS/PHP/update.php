<?php

require_once 'crud.php';

$id = $_GET['id'];

if ($_POST) {

    $dados = [
        'membro' => $_POST['membro'],
        'versao' => $_POST['versao'],
        'era' => $_POST['era'],
        'raridade' => $_POST['raridade'],
        'oficial' => $_POST['oficial'],
        'preco' => $_POST['preco']
    ];

    update($pdo, 'exercicio_figurinha', $dados, "id = $id");

    $mensagem = "
    <div class='mensagem'>
        <p>Figurinha atualizada!</p>
        <a href='select.php?id=$id' class='button'>Ver Figurinha</a>
    </div>
    ";
}

$figurinha = read($pdo, 'exercicio_figurinha', "id = $id");

?>

<head>
    <title>Editar Photocard de <?= $figurinha['membro'] ?></title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<section class="conteudo">
    <h2>Editar Photocard de <?= $figurinha['membro'] ?></h2>
    <form method="post">
        <div class="grid">
            <div class="celula">
                <p>Selecione o membro:</p>
                <select name="membro">
                    <option value="RM" <?= $figurinha['membro'] == 'RM' ? 'selected' : '' ?>>
                        RM
                    </option>
                    <option value="Jin" <?= $figurinha['membro'] == 'Jin' ? 'selected' : '' ?>>
                        Jin
                    </option>
                    <option value="Suga" <?= $figurinha['membro'] == 'Suga' ? 'selected' : '' ?>>
                        Suga
                    </option>
                    <option value="J-hope" <?= $figurinha['membro'] == 'J-hope' ? 'selected' : '' ?>>
                        J-hope
                    </option>
                    <option value="Jimin" <?= $figurinha['membro'] == 'Jimin' ? 'selected' : '' ?>>
                        Jimin
                    </option>
                    <option value="Taehyung" <?= $figurinha['membro'] == 'Taehyung' ? 'selected' : '' ?>>
                        Taehyung
                    </option>
                    <option value="Jungkook" <?= $figurinha['membro'] == 'Jungkook' ? 'selected' : '' ?>>
                        Jungkook
                    </option>
                    <option value="Todos" <?= $figurinha['membro'] == 'Todos' ? 'selected' : '' ?>>
                        Todos
                    </option>
                    <option value="Mais de um" <?= $figurinha['membro'] == 'Mais de um' ? 'selected' : '' ?>>
                        Mais de um
                    </option>
                </select>
            </div>

            <div class="celula">
                <p>Digite a era:</p>
                <input type="text" name="era" value="<?= $figurinha['era'] ?>" required>
            </div>
        </div>

        <div class="grid">
            <div class="celula">
                <p>Selecione a versão:</p>
                <select name="versao">
                    <option value="Normal" <?= $figurinha['versao'] == 'Normal' ? 'selected' : '' ?>>
                        Normal
                    </option>

                    <option value="Holográfico" <?= $figurinha['versao'] == 'Holográfico' ? 'selected' : '' ?>>
                        Holográfico
                    </option>

                    <option value="Transparente" <?= $figurinha['versao'] == 'Transparente' ? 'selected' : '' ?>>
                        Transparente
                    </option>

                    <option value="Lenticular" <?= $figurinha['versao'] == 'Lenticular' ? 'selected' : '' ?>>
                        Lenticular
                    </option>

                    <option value="Unit Card" <?= $figurinha['versao'] == 'Unit Card' ? 'selected' : '' ?>>
                        Unit Card
                    </option>
                </select>
            </div>
        </div>

        <div class="grid">
            <div class="celula">
                <p>Selecione a raridade:</p>

                <select name="raridade">
                    <option value="Comum" <?= $figurinha['raridade'] == 'Comum' ? 'selected' : '' ?>>
                        Comum
                    </option>

                    <option value="Raro" <?= $figurinha['raridade'] == 'Raro' ? 'selected' : '' ?>>
                        Raro
                    </option>

                    <option value="Ultrararo" <?= $figurinha['raridade'] == 'Ultrararo' ? 'selected' : '' ?>>
                        Ultrararo
                    </option>
                </select>
            </div>
        </div>

        <div class="grid">
            <div class="celula">
                <p>O PC é oficial?</p>
                <select name="oficial">
                    <option value="Sim" <?= $figurinha['oficial'] == 'Sim' ? 'selected' : '' ?>>
                        Sim, é oficial
                    </option>

                    <option value="Não" <?= $figurinha['oficial'] == 'Não' ? 'selected' : '' ?>>
                        Não, não é oficial
                    </option>
                </select>
            </div>
        </div>
        <div class="grid">
            <div class="celula">
                <p>Selecione o valor do PC:</p>
                <input type="number" name="preco" value="<?= $figurinha['preco'] ?>" required>
            </div>
        </div>

        <button type="submit">Salvar</button>
    </form>
    <?php if (isset($mensagem)) { ?>
        <div class="mensagem">
            <?= $mensagem ?>
        </div>
    <?php } ?>
</section>