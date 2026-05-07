<html>

<head>
    <title>Criar um novo Photocard</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <section class="conteudo">
        <div class="form">
            <form method="post" enctype="multipart/form-data" action="insert.php">

                <h2>Cadastro de Photocards</h2>

                <div class="grid">
                    <div class="celula">
                        <p>Selecione o membro:</p>
                        <select name="membro" required>
                            <option value="Todos">Todos</option>
                            <option value="RM">RM</option>
                            <option value="Jin">Jin</option>
                            <option value="Suga">Suga</option>
                            <option value="J-hope">J-hope</option>
                            <option value="Jimin">Jimin</option>
                            <option value="Taehyung">Taehyung</option>
                            <option value="Jungkook">Jungkook</option>
                            <option value="Mais de um">Mais de um</option>
                        </select>
                    </div>
                    <div class="celula">
                        <p>Digite a era:</p>
                        <input type="text" name="era" placeholder="Ex.: HYYH PT1" required>
                    </div>
                </div>

                <div class="grid">
                    <div class="celula">
                        <p>Selecione a versão:</p>
                        <select name="versao" required>
                            <option value="Normal">Normal</option>
                            <option value="Holográfico">Holográfico</option>
                            <option value="Transparente">Transparente</option>
                            <option value="Lenticular">Lenticular</option>
                            <option value="Unit Card">Unit Card</option>
                        </select>
                    </div>
                </div>

                <div class="grid">
                    <div class="celula">
                        <p>Selecione a raridade:</p>
                        <select name="raridade" required>
                            <option value="Comum">Comum</option>
                            <option value="Raro">Raro</option>
                            <option value="Ultrararo">Ultrararo</option>
                        </select>
                    </div>
                </div>

                <div class="grid">
                    <div class="celula">
                        <p>O PC é oficial?</p>
                        <select name="oficial" required>
                            <option value="Sim">Sim, é oficial</option>
                            <option value="Não">Não, não é oficial</option>
                        </select>
                    </div>
                    <div class="celula">
                        <p>Selecione o valor do PC</p>
                        <input type="number" step="0.10" name="preco" placeholder="Ex.: 30,99" required>
                    </div>
                </div>

                <input type="file" name="foto" accept="image/*" required>

                <button type="submit">Enviar</button>

            </form>
        </div>
    </section>
</body>

</html>