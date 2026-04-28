<?php

require_once 'crud.php';

$livros = readAll($pdo, 'livros', 'preco < 50 and id < 50');

print '<table border="1">
    <tr>
    <th>ID</th>
    <th>Título</th>
    <th>Autor</th>
    </tr>';

foreach ($livros as $livro) {
    print '<tr><td>' . $livro['id'] . '</td>' .
        '<td>' . $livro['titulo'] . '</td>' .
        '<td>' . $livro['autor'] . '</td></tr>';
}

print '</table>';

$livro = read($pdo, 'livros', 'id = 674');

if($livro) {
    print '<h2>Livro encontrado:</h2>';
    print ' ID: ' . $livro['id'] . '<br>';
    print 'Título: ' . $livro['titulo'] . '<br>';
    print 'Autor: ' . $livro['autor'] . '<br>';
} else {
    print 'Livro não encontrado.';
}