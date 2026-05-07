<?php require_once 'crud.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["acao"]) && $_POST["acao"] === "deletar") {

    $idCard = $_POST["id"];

    $deletado = delete($pdo, "cards", "ID = $idCard");

    if ($deletado) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao deletar";
    }
}

if (!isset($_GET["id"])) {
    echo "ID não informado";
    exit;
}

$id = $_GET["id"];

$card = read($pdo, "cards", "ID = $id");

if (!$card) {
    echo "Card não encontrado";
    exit;
}

?>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="container">

    <div class="details-card">

        <img src="<?= $card["capa"] ?>" alt="<?= $card["Name"] ?>">

        <div class="info">
            <h1><?= $card["Name"] ?></h1>

            <p><strong>Tipo:</strong> <?= $card["Type"] ?></p>
            <p><strong>Descrição:</strong> <?= $card["Descr"] ?></p>

            
        <!-- BOTÕES -->
            <div class="actions">

                <form method="POST">
                    <input type="hidden" name="id" value="<?= $card["ID"] ?>">
                    <button type="submit" name="acao" value="deletar" class="delete-btn" onclick="return confirm('Tem certeza que deseja excluir?')">
                        🗑 Deletar
                    </button>
                </form>

            </div>
        </div>

    </div>

    <a href="index.php" class="back">← Voltar</a>

</div>