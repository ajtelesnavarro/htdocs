<?php

require_once 'crud.php';

$novoLivro = [
    'titulo' => 'PHP for Babies',
    'isbn' => '1234567890123',
    'autor' => 'John Doe',
    'preco' => 29.99,
    'situacao' => 'Disponível',
    'categoria' => 'Programação'
];

$idLivroNovo = create($pdo, 'livros', $novoLivro);
echo "Novo livro inserido com ID: $idLivroNovo";