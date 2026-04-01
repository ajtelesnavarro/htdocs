<?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $pais = $_POST['pais'];
    $genero = $_POST['genero'];

    echo "Nome: " . $nome . "<br>";
    echo "Endereço: " . $endereco . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Mensagem: " . $mensagem . "<br>";
    echo "País: " . $pais . "<br>";
    echo "Gênero: " . $genero . "<br>";
?>