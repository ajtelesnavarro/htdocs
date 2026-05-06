<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livro</title>
</head>
<body>

    <div class="formulario">

        <h2>Cadastro de Livro</h2>

        <form action="insert.php" method="POST" enctype="multipart/form-data">

            <input type="text" name="titulo" placeholder="Título" required><br><br>

            <input type="text" name="isbn" placeholder="ISBN" required><br><br>

            <input type="text" name="autor" placeholder="Autor" required><br><br>

            <input type="number" step="1.00" name="preco" placeholder="Preço" required><br><br>

            <select name="situacao" required>
                <option value="">Situação</option>
                <option value="disponivel">Disponível</option>
                <option value="nao_disponivel">Não disponível</option>
            </select><br><br>

            <input type="text" name="categoria" placeholder="Categoria" required><br><br>

            <input type="file" name="imagem_capa" accept="image/*"><br><br>

            <button type="submit">
                Enviar
            </button>

        </form>

    </div>

</body>
</html>