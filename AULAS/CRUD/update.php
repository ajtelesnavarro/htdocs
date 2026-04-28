<?php

require_once 'crud.php';

$idLivro = 674;

$dadosAtualizados = [
    'titulo' => 'Magia Negra for Babies',
    'isbn' => '1234567890123',
    'autor' => 'Leticia',
    'preco' => 29.99,
    'situacao' => 'Disponível',
    'categoria' => 'Outros'
];


$linhasAfetadas = update($pdo, 'livros', $dadosAtualizados, "id = $idLivro");

if($linhasAfetadas > 0) {
    echo "Livro atualizado com sucesso. Linhas afetadas: $linhasAfetadas";
} else {
    echo "Nenhum livro foi atualizado. Verifique se o ID existe.";
}