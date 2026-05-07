<?php require_once 'crud.php';
?>

<?=
// $livros = readAll($pdo, "livros");

// foreach($livros as $livro){
//     echo "id: " . $livro['id'];
//     echo "titulo: " . $livro['titulo'] . "<br>";
// }
$id = isset($_GET["id"]) ? $_GET["id"] : null;


$livro = read($pdo, "livros","id = $id");

if ($livro){
    echo "Título: " . $livro["titulo"];
    echo "Preço: " . $livro["preco"];
    echo "<img src='$livro[capa]' width'200px'>";
} else {
    echo "Livro não encontrado.";
}
?>  