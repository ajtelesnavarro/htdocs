<?php require_once "crud.php";

$newCard = [
    "Name" => $_POST["name"] ?? "",
    "Type" => $_POST["Type"] ?? "",
    "Descr" => $_POST["Descr"] ?? "",
    "capa" => ""
];

$idNewCard = create($pdo, "cards", $newCard);

if(!isset($_FILES["arquivo"])){
    echo "Nenhum arquivo enviado";
    exit;
}

$tipos_permitidos = ["image/jpeg", "image/png", "image/gif"];

if(!in_array($_FILES["arquivo"]["type"], $tipos_permitidos)){
    echo "Tipo de arquivo não permitido";
    exit;
}

$tamanho_maximo = 1 * 1024 * 1024;

if($_FILES["arquivo"]["size"] > $tamanho_maximo){
    echo "Arquivo muito grande";
    exit;
}

$extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);
$novoNome = "capa_" . uniqid() . "." . $extensao;

$dir = "uploads/";
$caminho = $dir . "$idNewCard/";
$file = $caminho . $novoNome;

if(!is_dir($caminho)){
    mkdir($caminho, 0755, true);
}

if(move_uploaded_file($_FILES["arquivo"]["tmp_name"], $file)){
    $capaURL = $file;
    update($pdo, "cards", ["capa" => $capaURL], "id = $idNewCard");

    header("Location: index.php");
} else {
    echo "Erro ao enviar a imagem";
}