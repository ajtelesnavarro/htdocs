<?php

$categorias = [
    'bebidas quentes' => 'Bebidas Quentes',
    'bebidas frias' => 'Bebidas Frias',
    'outros' => 'Outros'
];

$produtos_base = [
    [
        'id' => 1,
        'nome' => 'Caramel Macchiato',
        'categoria' => 'bebidas quentes',
        'preco' => 19.90,
        'descricao_curta' => 'Café espresso com leite vaporizado, baunilha e calda de caramelo.',
        'descricao_longa' => 'O Caramel Macchiato é uma bebida clássica e elegante, feita com leite vaporizado, xarope de
                    baunilha e uma dose de espresso adicionada por cima, finalizada com uma generosa camada de calda
                    de caramelo. Ele combina o sabor intenso do café com a doçura da baunilha e do caramelo, criando
                    uma bebida equilibrada e cremosa.',
        'descricao_longa2'=> 'Ao preparar, as cápsulas proporcionam uma bebida cremosa, com aroma envolvente e sabor equilibrado. A
                    intensidade do café é suavizada pela doçura do leite e do caramelo, tornando a experiência agradável
                    tanto para quem aprecia cafés mais leves quanto para quem busca um toque adocicado.<br><br>
                    A acidez é baixa a média, garantindo uma bebida suave e fácil de consumir no dia a dia. Já a doçura
                    é elevada, característica marcante do Caramel Macchiato, evidenciada pelas notas de caramelo e
                    baunilha presentes na fórmula das cápsulas.<br><br>
                    O corpo é médio, resultando em uma textura equilibrada e cremosa na boca. A finalização é agradável
                    e levemente doce, com notas persistentes de caramelo que permanecem após cada gole.<br><br>
                    No geral, as cápsulas de Caramel Macchiato são ideais para quem busca praticidade sem abrir mão de
                    sabor, oferecendo uma bebida doce, cremosa e equilibrada com apenas um toque.',
        'imagem' => './IMAGENS/caramel_machiatto_foto.png'
    ],
    [
        'id' => 2,
        'nome' => 'Caffè Mocha',
        'categoria' => 'bebidas quentes',
        'preco' => 18.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e calda de chocolate.',
        'descricao_longa' => 'O Caffè Mocha é uma bebida indulgente e envolvente, preparada com espresso encorpado, leite vaporizado
         e uma deliciosa calda de chocolate, finalizada com chantilly. Ele combina a intensidade do café com a doçura do chocolate, 
         resultando em uma bebida cremosa e reconfortante.',
        'descricao_longa2'=> 'Ao preparar, as cápsulas proporcionam uma bebida cremosa, com aroma marcante de café e chocolate. O 
        sabor é equilibrado entre o amargor do espresso e a doçura do cacau, criando uma experiência agradável e aconchegante.<br><br>
        A acidez é baixa, garantindo suavidade ao paladar. A doçura é média a alta, destacando as notas de chocolate presentes na bebida.<br><br>
        O corpo é médio a encorpado, com textura cremosa e densa. A finalização é doce e persistente, com notas de chocolate que permanecem após 
        cada gole.<br><br> No geral, é ideal para quem aprecia bebidas doces com toque de café intenso.',
        'imagem' => './IMAGENS/caffe_mocha_foto.png'
    ],
    [
        'id' => 3,
        'nome' => 'Flat White',
        'categoria' => 'bebidas frias',
        'preco' => 20.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e microespuma.',
        'descricao_longa' => 'O Flat White é uma bebida sofisticada e equilibrada, feita com espresso e leite vaporizado de textura aveludada, 
        formando uma camada fina de microespuma. Ele destaca o sabor do café, proporcionando uma experiência mais intensa e cremosa.',
        'descricao_longa2'=> 'Ao preparar, as cápsulas oferecem uma bebida cremosa e suave, com aroma rico de café. O sabor é mais intenso, com o leite equilibrando a força do espresso.<br><br>
        A acidez é média, trazendo leve vivacidade ao paladar. A doçura é baixa, permitindo que o café seja o protagonista.<br><br>
        O corpo é médio a encorpado, com textura aveludada. A finalização é limpa e marcante, com notas persistentes de café.<br><br>
        Ideal para quem prefere um café mais intenso, porém equilibrado com leite.',
        'imagem' => './IMAGENS/flat_white_foto.png'
    ],
    [
        'id' => 4,
        'nome' => 'Cinnamon Dolce Latte',
        'categoria' => 'bebidas frias',
        'preco' => 17.99,
        'descricao_curta' => 'Café espresso com leite vaporizado, creme de leite e canela.',
        'descricao_longa' => 'O Cinnamon Dolce Latte é uma bebida doce e aromática, feita com leite vaporizado, espresso e xarope de canela, 
        finalizada com chantilly e um toque de açúcar aromatizado. Ele combina especiarias e café de forma aconchegante e envolvente.',
        'descricao_longa2' => 'Ao preparar, as cápsulas liberam um aroma envolvente de canela com café. O sabor é doce e levemente picante, criando uma experiência única.<br><br>A acidez é baixa, garantindo suavidade. A doçura é alta, com destaque para as notas de canela e açúcar.<br><br>
        O corpo é médio, com textura cremosa. A finalização é doce e aromática, com notas persistentes de especiarias.<br><br>Perfeito para quem gosta de bebidas quentes com toque especiado.',
        'imagem' => './IMAGENS/cinnamon_dolce_latte_foto.png'
    ],
    [
        'id'=> 5,
        'nome'=> 'Cappuccino',
        'categoria' => 'bebidas quentes',
        'preco' => 16.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e espuma de leite.',
        'descricao_longa' => 'O Cappuccino é uma bebida clássica e equilibrada, preparada com espresso, leite vaporizado e uma camada generosa de espuma.
         Ele oferece uma combinação harmoniosa entre intensidade e cremosidade.',
        'descricao_longa2'=> 'Ao preparar, as cápsulas proporcionam uma bebida leve e cremosa, com aroma suave de café. O sabor é equilibrado entre o espresso e o leite.<br><br>
        A acidez é média, trazendo leve frescor. A doçura é baixa a média, natural do leite vaporizado.<br><br>
        O corpo é médio, com textura espumosa e leve. A finalização é suave e agradável, com leve persistência de café.<br><br>
        Ideal para quem busca um café clássico e equilibrado.',
        'imagem' => './IMAGENS/capuccino_foto.png'
    ],
    [
        'id'=> 6,
        'nome'=> 'Chai Tea Latte',
        'categoria' => 'bebidas quentes',
        'preco' => 15.90,
        'descricao_curta' => 'Chá preto com especiarias e leite vaporizado.',
        'descricao_longa' => 'O Chai Tea Latte é uma bebida aromática e reconfortante, feita com chá preto e uma mistura de especiarias como canela, gengibre e cravo, combinados com leite vaporizado. Ele oferece uma experiência quente e exótica.',
        'descricao_longa2' => 'Ao preparar, as cápsulas liberam um aroma envolvente de especiarias e café. O sabor é doce e levemente picante, criando uma experiência única.<br><br>A acidez é baixa, garantindo suavidade. A doçura é alta, com destaque para as notas de especiarias e açúcar.<br><br>
        O corpo é médio, com textura cremosa. A finalização é doce e aromática, com notas persistentes de especiarias.<br><br>Perfeito para quem gosta de bebidas quentes com toque especiado.',
        'imagem' => './IMAGENS/chai_tea_latte_foto.png'
    ],
    [
        'id'=> 7,
        'nome'=> 'Espresso Macchiato',
        'categoria' => 'bebidas quentes',
        'preco' => 14.90,
        'descricao_curta' => 'Café espresso com uma pequena quantidade de leite vaporizado.',
        'descricao_longa' => 'O Espresso Macchiato é uma bebida simples e intensa, composta por um shot de espresso “manchado” com uma pequena quantidade de leite vaporizado. Ele mantém o sabor forte do café com um leve toque de suavidade.',
        'descricao_longa2'=> 'Ao preparar, as cápsulas resultam em uma bebida de aroma intenso e sabor marcante. O leite apenas suaviza o espresso, sem tirar sua força.<br><br>A acidez é média a alta, característica do café. A doçura é baixa.<br><br>O corpo é encorpado, com textura levemente cremosa. A finalização é intensa e persistente.<br><br>Ideal para quem gosta de café forte com um leve toque de leite.',
        'imagem' => './IMAGENS/espresso_machiatto_foto.png'
    ],
    [
        'id'=> 8,
        'nome'=> 'Iced Caramel Macchiato',
        'categoria' => 'bebidas frias',
        'preco' => 19.90,
        'descricao_curta' => 'Café espresso com leite vaporizado, baunilha e calda de caramelo servido gelado.',
        'descricao_longa' => 'O Iced Caramel Macchiato é uma versão refrescante do clássico, preparado com leite gelado, xarope de baunilha, espresso e calda de caramelo. Ele combina frescor com doçura e intensidade.',
        'descricao_longa2' => 'Ao preparar, as cápsulas proporcionam uma bebida refrescante e cremosa, com aroma doce e envolvente. O sabor equilibra café, leite e caramelo.<br><br>A acidez é baixa a média. A doçura é alta, com destaque para o caramelo e a baunilha.<br><br>O corpo é leve a médio, ideal para consumo gelado. A finalização é doce e refrescante.<br><br>Perfeito para dias quentes ou para quem prefere bebidas geladas.',
        'imagem' => './IMAGENS/iced_caramel_macchiato_foto.png'
    ],
    [
        'id'=> 9,
        'nome'=> 'Vanilla Sweet Cream Cold Brew',
        'categoria' => 'bebidas frias',
        'preco' => 18.90,
        'descricao_curta' => 'Café gelado com creme doce e calda de baunilha.',
        'descricao_longa' => 'O Vanilla Sweet Cream Cold Brew é uma bebida suave e refrescante, feita com café extraído a frio, servido com um toque de creme doce de baunilha. Ele combina leveza com cremosidade.',
        'descricao_longa2' => 'Ao preparar, as cápsulas oferecem uma bebida suave, com aroma delicado de café e baunilha. O sabor é equilibrado e refrescante.<br><br>A acidez é baixa, característica do cold brew. A doçura é média, proveniente do creme de baunilha.<br><br>O corpo é leve a médio, com textura cremosa no topo. A finalização é suave e levemente doce.<br><br>Ideal para quem busca um café gelado, leve e sofisticado.',
        'imagem' => './IMAGENS/vanilla_sweet_cream_cold_brew_foto.png'

    ],
    [
        'id'=> 10,
        'nome'=> 'Brown Sugar Oatmilk Shaken Espresso',
        'categoria' => 'bebidas quentes',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 11,
        'nome'=> 'Iced Blonde Vanilla Latte',
        'categoria' => 'bebidas frias',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 12,
        'nome'=> 'Iced Cinnamon Dolce Latte',
        'categoria' => 'bebidas frias',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 13,
        'nome'=> 'Iced White Chocolate Mocha',
        'categoria' => 'bebidas frias',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 14,
        'nome'=> 'Pink Drink',
        'categoria' => 'bebidas frias',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 15,
        'nome'=> 'Pumpkin Cream Cold Brew',
        'categoria' => 'bebidas frias',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 16,
        'nome'=> 'Strawberry Acai Refresher',
        'categoria' => 'bebidas frias',
        'preco' => 0,
        'descricao_curta' => 'Descrição curta do produto',
        'descricao_longa' => 'Descrição longa do produto',
        'descricao_longa2' => 'Descrição longa 2 do produto',
        'imagem' => './IMAGENS/default.png'
    ],
    [
        'id'=> 17,
        'nome'=> 'Caramel Macchiato em Cápsulas',
        'categoria' => 'outros',
        'preco' => 15.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e calda de caramelo.',
        'descricao_longa' => 'O Caramel Macchiato em Cápsulas é uma versão conveniente do clássico, preparado com cápsulas de café e calda de caramelo. Ele combina sabor intenso com doçura equilibrada.',
        'descricao_longa2' => 'Ao preparar, as cápsulas resultam em uma bebida de aroma envolvente e sabor rico. O caramelo adiciona doçura e complexidade ao espresso.<br><br>A acidez é baixa, garantindo suavidade. A doçura é alta, com destaque para o caramelo.<br><br>O corpo é médio, com textura cremosa. A finalização é doce e aromática, com notas persistentes de caramelo.<br><br>Perfeito para quem gosta de bebidas quentes com toque especiado.',
        'imagem' => './IMAGENS/index/caramel_macchaito_capsulas.png'
    ]
];
