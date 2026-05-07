<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="form-wrapper">
<body>
    <div class="container">

        <h1>Nova Carta</h1>

        <form action="insert.php" method="POST" enctype="multipart/form-data" class="form-card">

            <label>Nome</label>
            <input type="text" name="name" required>

            <label>Tipo</label>
            <input type="text" name="Type" required>

            <label>Descrição</label>
            <input type="text" name="Descr" required>

            <label>Imagem da carta</label>
            <input type="file" name="arquivo" required>

            <button type="submit">Cadastrar Carta</button>

        </form>

        <a href="index.php" class="back">← Voltar</a>

    </div>
</body>
</div>