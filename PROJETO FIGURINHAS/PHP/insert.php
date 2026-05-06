<?php
require_once 'crud.php';

$novoFigurinha = [
    'membro' => $_POST['membro'],
    'versao' => $_POST['versao'],
    'era' => $_POST['era'],
    'raridade' => $_POST['raridade'],
    'oficial' => $_POST['oficial'],
    'preco' => $_POST['preco'],
    'foto' => ''
];

$idFigurinhaNovo = create($pdo, 'exercicio_figurinha', $novoFigurinha);

$tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];

if (!in_array($_FILES['foto']['type'], $tipos_permitidos)) {
    echo "Tipo de arquivo não permitido.";
    exit;
}

$tamanho_max = 1 * 1024 * 1024 * 1024; // 1GB

if ($_FILES['foto']['size'] > $tamanho_max) {
    echo "Arquivo muito grande.";
    exit;
}

$extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

$novonome = "figurinha_" . uniqid() . "." . $extensao;

$dir = "uploads/";
$caminho = $dir . "$idFigurinhaNovo/";

$file = $caminho . $novonome;

if (!is_dir($caminho)) {
    mkdir($caminho, 0755, true);
}

if (move_uploaded_file($_FILES['foto']['tmp_name'], $file)) {

    $imagemUrl = $file;

    update(
        $pdo,
        'exercicio_figurinha',
        ['foto' => $imagemUrl],
        "id = $idFigurinhaNovo"
    );

    header("Location: select.php?id=$idFigurinhaNovo");
    exit;

} else {
    echo "Erro ao enviar a imagem.";
}
?>