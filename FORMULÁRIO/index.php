<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>

<body>

    <h1>Formulário de Contato</h1>
    <form action="recebe.php" method="post">
        <input type="text" placeholder="Nome" name="nome"><br><br>

        <input type="text" placeholder="Endereço" name="endereco"><br><br>

        <input type="email" placeholder="Email" name="email"><br><br>

        <textarea placeholder="Mensagem" name="mensagem"></textarea><br><br>

        <select name="pais">
            <option value="">Selecione um país</option>
            <option value="Brasil">Brasil</option>
            <option value="França">França</option>
            <option value="Coreia do Norte">Coreia do Norte</option>
            <option value="Estados Unidos">Estados Unidos</option>
        </select><br><br>

        <div>
            <input type="radio" name="genero" value="Masculino"> Masculino
            <input type="radio" name="genero" value="Feminino"> Feminino
            <input type="radio" name="genero" value="Outro"> Outro
        </div><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>