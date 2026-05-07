<?php
require_once 'crud.php';


$cards = readAll($pdo, 'cards');

// DELETE
if ($_POST && isset($_POST['acao']) && $_POST['acao'] == 'deletar') {
    $id = $_POST['id'];
    delete($pdo, 'cards', "id = $id");
    header("Location: index.php");
    exit;
}
?>

<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class='container'>

    <h1>Trading Cards Pokemon</h1>

    <a href="form.php">Adicionar Carta</a>

    <h2>Seu deck atual: <br>
    </h2>


    
        <div class="grid">

            <?php foreach($cards as $card): ?>
        
            <div class="card">
            <a href="select.php?id=<?= $card["ID"] ?>" class="card">
                <img src="<?= $card["capa"] ?>" alt="<?= $card["Name"] ?>">
            </a>

            
            </div>
            <?php endforeach; ?>

            
    </div>

<!-- <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Descr</th>
    </tr>

    <?php foreach ($cards as $card): ?>
    <tr>
        <form method="POST">
            <input type="hidden" name="ID" value="<?= $card['ID'] ?>">

            <td><?= $card['ID'] ?></td>
            <td><?= $card['Name'] ?></td>
            <td><?= $card['Type'] ?></td>
            <td><?= $card['Descr'] ?></td>
            <td>"<img src='<?=$card['capa']?>' width='200px'>"</td>

            <td>
                <a class="edit-link" href="editSong.php?id=<?= $card['ID'] ?>">Editar</a>
                <button type="submit" name="acao" value="deletar">Deletar</button>
            </td>
        </form>
    </tr>
    <?php endforeach; ?>
</table>
    </div>
</body>