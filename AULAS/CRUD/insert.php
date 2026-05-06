<?php
require_once 'crud.php';

$novoLivro = [
    'titulo' => $_POST['titulo'],
    'isbn' => $_POST['isbn'],
    'autor' => $_POST['autor'],
    'preco' => $_POST['preco'],
    'situacao' => $_POST['situacao'],
    'categoria' => $_POST['categoria'],
    'imagem_capa' => ''
];

$idLivroNovo = create($pdo, 'livros', $novoLivro);

$tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];

if (!in_array($_FILES['imagem_capa']['type'], $tipos_permitidos)) {
    echo "Tipo de arquivo não permitido.";
    exit;
}

$tamanho_max = 1 * 1024 * 1024;

if ($_FILES['imagem_capa']['size'] > $tamanho_max) {
    echo "Arquivo muito grande.";
    exit;
}

$extensao = pathinfo($_FILES['imagem_capa']['name'], PATHINFO_EXTENSION);

$novonome = "capa_" . uniqid() . "." . $extensao;

$dir = "uploads/";
$caminho = $dir . "$idLivroNovo/";

$file = $caminho . $novonome;

if (!is_dir($caminho)) {
    mkdir($caminho, 0755, true);
}

if (move_uploaded_file($_FILES['imagem_capa']['tmp_name'], $file)) {

    $capaUrl = $file;

    update(
        $pdo,
        'livros',
        ['imagem_capa' => $capaUrl],
        "id = $idLivroNovo"
    );

    echo "Livro cadastrado com sucesso!<br>";
    echo "<a href='select.php?id=$idLivroNovo'>Ver livro</a>";

} else {
    echo "Erro ao enviar a imagem.";
}