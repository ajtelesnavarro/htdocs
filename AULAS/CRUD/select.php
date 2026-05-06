<?php

require_once 'crud.php';

$livro = read($pdo, 'livros', "id = ".$_GET['id']);

if($livro) {
    print '<h2>Livro encontrado:</h2>';
    print ' ID: ' . $livro['id'] . '<br>';
    print 'Título: ' . $livro['titulo'] . '<br>';
    print 'Autor: ' . $livro['autor'] . '<br>';
    print '<img src="' . $livro['imagem_capa'] . '" alt="Capa do livro" width="200">';
} else {
    print 'Livro não encontrado.';
}