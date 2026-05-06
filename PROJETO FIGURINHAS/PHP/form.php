<html>

<head>
    <title>Site de Figurinhas</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <section class="conteudo">
        <div class="form">
            <form method="post" enctype="multipart/form-data" action="insert.php">

                <h2>Cadastro de Photocards</h2>

                <div class="grid">
                    <select name="membro" required>
                        <option value="">Selecione o membro</option>
                        <option value="RM">RM</option>
                        <option value="Jin">Jin</option>
                        <option value="Suga">Suga</option>
                        <option value="J-hope">J-hope</option>
                        <option value="Jimin">Jimin</option>
                        <option value="Taehyung">Taehyung</option>
                        <option value="Jungkook">Jungkook</option>
                        <option value="Todos">Todos</option>
                        <option value="Mais de um">Mais de um</option>
                    </select>

                    <input type="text" name="era" placeholder="Escreva a Era do PC" required>
                </div>

                <div class="grid">
                    <select name="versao" required>
                        <option value="">Selecione a Versão</option>
                        <option value="Normal">Normal</option>
                        <option value="Holográfico">Holográfico</option>
                        <option value="Transparente">Transparente</option>
                        <option value="Lenticular">Lenticular</option>
                        <option value="Unit Card">Unit Card</option>
                    </select>
                </div>
                <div class="grid">
                    <select name="raridade" required>
                        <option value="">Selecione a Raridade</option>
                        <option value="Comum">Comum</option>
                        <option value="Raro">Raro</option>
                        <option value="Ultrararo">Ultrararo</option>
                    </select>
                </div>
                <div class="grid">
                    <select name="oficial" required>
                        <option value="">O PC é oficial?</option>
                        <option value="Sim">Sim, é oficial</option>
                        <option value="Não">Não, não é oficial</option>
                    </select>
                    <input type="number" step="0.10" name="preco" placeholder="Selecione o valor do PC" required>
                </div>

                <input type="file" name="foto" accept="image/*" required>

                <button type="submit">Enviar</button>

            </form>
        </div>
    </section>
</body>

</html>