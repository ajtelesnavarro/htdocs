<html>

<head>
    <meta charset="UTF-8">
    <title>STARBUCKS</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=DM+Serif+Text:ital@0;1&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    require 'partials/header.php';
    ?>
    <div class="background-gif">
        <video class="bg-video" autoplay muted loop>
            <source src="./IMAGENS/index/video_preview_h264.mp4" type="video/mp4">
        </video>
        <div class="slogan-background-gif">
            <h2 class="slogan">Descubra o sabor do café perfeito</h2>
        </div>
    </div>
    <section class="conteudo_index">
        <div class="produtos_populares">
            <div class="titulo_section_index">
                <h2>Produtos mais vendidos</h2>
            </div>
            <div class="produtos_populares_grid_index">
                <a href="./detalhes_carmac.php" class="container_produtos_populares">
                    <img src="./IMAGENS/caramel_machiatto_foto.png" alt="Caramel Machiato">
                    <div class="text_produtos_populares">
                        <h2>Caramel Machiato</h2>
                        <p>Uma deliciosa combinação de espresso intenso
                            com leite cremoso e baunilha suave, finalizada com uma generosa
                            camada de caramelo que traz um toque doce e irresistível a cada gole.</p>
                    </div>
                </a>

                <a href="#" class="container_produtos_populares">
                    <img src="./IMAGENS/caffe_mocha_foto.png" alt="Caffè Mocha">
                    <div class="text_produtos_populares">
                        <h2>Caffè Mocha</h2>
                        <p>A combinação perfeita de espresso intenso com leite cremoso e chocolate rico,
                            criando uma bebida encorpada, doce e irresistível, perfeita para transformar
                            seu café em um momento de puro prazer.</p>
                    </div>
                </a>

                <a href="#" class="container_produtos_populares">
                    <img src="./IMAGENS/flat_white_foto.png" alt="Flat White">
                    <div class="text_produtos_populares">
                        <h2>Flat White</h2>
                        <p>Preparado com uma dose dupla de espresso e leite vaporizado com microespuma fina,
                            oferece uma textura aveludada e um sabor intenso de café, perfeito para quem
                            busca menos doçura e mais autenticidade.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="conteudo_index">
        <div class="titulo_section_index">
            <h2>Compre nossas capsulas!</h2>
        </div>
        <div class="compre_nossas_capsulas">
            <div class="imagem_compre_capsulas">
                <img src="./IMAGENS/index/caramel_macchaito_capsulas.png" alt="Cápsula Caramel Macchiato">
            </div>
            <div class="text_compre_capsulas">
                <p>Desfrute do sabor autêntico do Caramel Macchiato no conforto da sua casa com nossas cápsulas
                    exclusivas, compatíveis com máquinas Nespresso. Cada cápsula é cuidadosamente elaborada para
                    oferecer a combinação perfeita de espresso intenso, leite cremoso e um toque irresistível de
                    caramelo, proporcionando uma experiência de café premium a cada xícara.</p>
                    <div class="preco_compre_capsulas">Por apenas R$ 19,90</div>
                    <a href="./detalhes_carmac_caps.php" class="botao_compre_capsulas">Comprar agora</a>
            </div>
        </div>
    </section>

    <section class="conteudo_index">
        <div class="titulo_section_index">
            <h2>Quer nos conhecer? Agende sua visita!</h2>
        </div>
        <form action="data.php" method="post">
            <div class="container_formulario_pedido_bloco">
                <input type="text" placeholder="Nome" name="nome">
                <input type="text" placeholder="Sobrenome" name="sobrenome">
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <div class="container_formulario_pedido_bloco">
                <input type="number" placeholder="Telefone" name="telefone">
            </div>
            <div class="container_formulario_pedido_bloco">
                <textarea placeholder="Tem algum detalhe especial que você gostaria de nos contar?" name="mensagem"></textarea>
            </div>
            <label class="checkbox-linha">
                <input type="checkbox">
                <span>Aceito receber notícias do meu pedido pelo meu email</span>
            </label>
            <label class="checkbox-linha">
                <input type="checkbox">
                <span>Aceito receber promoções e ofertas em meu email</span>
            </label>
            <div class="container_formulario_pedido_bloco">
                <button type="reset"><b>Limpar</b></button>
                <button type="submit"><b>Enviar</b></button>
            </div>
        </form>
    </section>
</body>

</html>