<?php require_once "crud.php";

$novoLivro = [
    "titulo" => $_POST['titulo'],
    "isbn" => $_POST['isbn'],
    "autor" => $_POST['autor'],
    "preco" => $_POST['preco'],
    "situacao" => $_POST['situacao'],
    "categoria" => $_POST['categoria'],
    "capa" => ''
];

$idNovoLivro = create($pdo, "livros", $novoLivro);

echo "Novo livro inserido com o ID " . $idNovoLivro;

$tipo_permitidos = ['image/jpeg', 'image/png',
'image/gif'];
if(!in_array($_FILES['arquivo']['type'],
$tipo_permitidos)) {
    echo "Tipo de arquivo não permitido.";
    exit;

}

$tamanho_maximo = 1 * 1024 * 1024; // 1 mb
if($_FILES['arquivo']['size'] > $tamanho_maximo) {
        echo "Arquivo muito grande.";
        exit;

}

$extensao = pathinfo($_FILES['arquivo']['name'],
PATHINFO_EXTENSION);

$novoNome = "capa_".uniqid()."." . $extensao;

$dir = "uploads/";
$caminho = $dir ."$idNovoLivro/";
$file = $caminho . $novoNome;

if(!is_dir($caminho)){
    mkdir($caminho, 0755, true);
}

if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $file)){
    $capaURL = $file;
    update($pdo, "livros", ["capa" => $capaURL], "id = $idNovoLivro");
    echo "Livro inserido com sucesso com o ID: $idNovoLivro <br><br>";
    echo "<a href='select.php?
    id=$idNovoLivro'>Ver Livro</a>";
} else {
    echo "Erro ao enviar a imagem";
}

