<?php

require_once 'crud.php';

$idLivro = 674;

$livroDeletado = delete($pdo, 'livros', 'id = ' . $idLivro);
if($livroDeletado > 0) {
    echo "Livro deletado com sucesso. Linhas afetadas: $livroDeletado";
} else {
    echo "Nenhum livro foi deletado. Verifique se o ID existe.";
}