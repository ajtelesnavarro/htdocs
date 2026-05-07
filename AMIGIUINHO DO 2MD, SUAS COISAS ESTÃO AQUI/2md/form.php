<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Livro</title>
</head>

<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" required><br><br>

        <label for="situacao">Situação:</label>
        <select name="situacao" required>
            <option value="Disponivel">Disponível</option>
            <option value="Indisponivel">Indisponível</option>
        </select><br><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" required><br><br>

        <label for="arquivo">Selecione uma imagem da capa:</label>
        <input type="file" name="arquivo" accept="image/*" required><br><br>

        <input type="submit" value="Inserir Livro">
    </form>
</body>

</html>