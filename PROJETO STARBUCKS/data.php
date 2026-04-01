<?php
// $nome = $_POST['nome'];
// $sobrenome = $_POST['sobrenome'];
// $email = $_POST['email'];
// $senha = $_POST['senha'];
// $telefone = $_POST['telefone'];
// $mensagem = $_POST['mensagem'];
    
// echo "Nome: " . $nome . "<br>";
// echo "Sobrenome: " . $sobrenome . "<br>";
// echo "Email: " . $email . "<br>";
// echo "Senha: " . $senha . "<br>";
// echo "Telefone: " . $telefone . "<br>";
// echo "Mensagem: " . $mensagem . "<br>";

?>

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
        'descricao_longa' => 'O Caramel Macchiato é uma bebida clássica da Starbucks, feita com café
         espresso, leite vaporizado, baunilha e finalizada com uma generosa calda de caramelo. O sabor
          é uma combinação perfeita entre o amargor do café e a doçura do caramelo, criando uma 
          experiência rica e indulgente. É uma escolha popular para quem gosta de bebidas doces e cremosas.',
        'imagem' => './IMAGENS/caramel_machiatto_foto.png'
    ],
    [
        'id' => 2,
        'nome' => 'Caffè Mocha',
        'categoria' => 'bebidas quentes',
        'preco' => 18.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e calda de chocolate.',
        'descricao_longa' => 'O Caffè Mocha é uma bebida saborosa da Starbucks, feita com café
         espresso, leite vaporizado e calda de chocolate. O sabor é uma combinação perfeita entre o 
         amargor do café e a doçura do chocolate, criando uma experiência rica e indulgente.
          É uma escolha popular para quem gosta de bebidas doces e cremosas.',
        'imagem' => './IMAGENS/caffe_mocha_foto.png'
    ],
    [
        'id' => 3,
        'nome' => 'Flat White',
        'categoria' => 'bebidas frias',
        'preco' => 20.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e microespuma.',
        'descricao_longa' => 'O Flat White é uma bebida clássica da Starbucks, feita com café
         espresso e leite vaporizado com microespuma. O sabor é uma combinação perfeita entre o 
         amargor do café e a suavidade do leite, criando uma experiência rica e equilibrada. 
         É uma escolha popular para quem gosta de bebidas mais fortes e menos doces.',
        'imagem' => './IMAGENS/flat_white_foto.png'
    ],
    [
        'id' => 4,
        'nome' => 'Cinnamon Dolce Latte',
        'categoria' => 'bebidas frias',
        'preco' => 17.99,
        'descricao_curta' => 'Café espresso com leite vaporizado, creme de leite e canela.',
        'descricao_longa' => 'O Cinnamon Dolce Latte é uma bebida deliciosa da Starbucks, feita com café
         espresso, leite vaporizado, creme de leite e canela. O sabor é uma combinação perfeita entre o 
         amargor do café e a doçura da canela, criando uma experiência rica e reconfortante. 
         É uma escolha popular para quem gosta de bebidas doces e aromáticas.',
        'imagem' => './IMAGENS/cinnamon_dolce_latte_foto.png'
    ],
    [
        'id'=> 5,
        'nome'=> 'Cappuccino',
        'categoria' => 'bebidas quentes',
        'preco' => 16.90,
        'descricao_curta' => 'Café espresso com leite vaporizado e espuma de leite.',
        'descricao_longa' => 'O Cappuccino é uma bebida clássica italiana feita com partes equilibradas de espresso,
            leite vaporizado e espuma de leite. Ele é mais leve que o latte, com uma camada
            espessa de espuma e sabor marcante de café. A espuma cremosa traz leveza à bebida.
            É perfeito para começar o dia com energia e equilíbrio.',
        'imagem' => './IMAGENS/capuccino_foto.png'
    ],
    [
        'id'=> 6,
        'nome'=> 'Chai Tea Latte',
        'categoria' => 'bebidas quentes',
        'preco' => 15.90,
        'descricao_curta' => 'Chá preto com especiarias e leite vaporizado.',
        'descricao_longa' => 'O Chai Tea Latte é feito com chá preto concentrado misturado com especiarias como
            canela, gengibre e cravo, combinado com leite vaporizado. É uma bebida aromática,
            levemente picante e sem café, ideal para quem quer algo diferente. Seu sabor
            exótico aquece e conforta ao mesmo tempo.',
        'imagem' => './IMAGENS/chai_tea_latte_foto.png'
    ],
    [
        'id'=> 7,
        'nome'=> 'Espresso Macchiato',
        'categoria' => 'bebidas quentes',
        'preco' => 14.90,
        'descricao_curta' => 'Café espresso com uma pequena quantidade de leite vaporizado.',
        'descricao_longa' => 'O Espresso Macchiato é simples e intenso: uma dose de espresso com uma pequena
            quantidade de leite vaporizado por cima. Ele mantém o sabor forte do café, com
            apenas um toque de suavidade. É servido em pequenas quantidades, mas com grande
            personalidade. Ideal para quem aprecia a essência pura do café.',
        'imagem' => './IMAGENS/espresso_machiatto_foto.png'
    ],
    [
        'id'=> 8,
        'nome'=> 'Iced Caramel Macchiato',
        'categoria' => 'bebidas frias',
        'preco' => 19.90,
        'descricao_curta' => 'Café espresso com leite vaporizado, baunilha e calda de caramelo servido gelado.',
        'descricao_longa' => 'O Iced Caramel Macchiato é uma versão refrescante do clássico Caramel Macchiato da Starbucks. 
            Ele é feito com café espresso, leite vaporizado, baunilha e finalizado com uma generosa calda de caramelo, servido sobre gelo. 
            O sabor é uma combinação perfeita entre o amargor do café e a doçura do caramelo, criando uma experiência rica e indulgente, ideal para os dias quentes.',
        'imagem' => './IMAGENS/iced_caramel_macchiato_foto.png'
    ],
    [
        'id'=> 9,
        'nome'=> 'Vanilla Sweet Cream Cold Brew',
        'categoria' => 'bebidas frias',
        'preco' => 18.90,
        'descricao_curta' => 'Café gelado com creme doce e calda de baunilha.',
        'descricao_longa' => 'O Vanilla Sweet Cream Cold Brew é uma bebida gelada da Starbucks, feita com café frio, creme doce e calda de baunilha. O
         sabor é suave e doce, perfeito para quem gosta de bebidas refrescantes e saborosas nos dias quentes.',
        'imagem' => './IMAGENS/vanilla_sweet_cream_cold_brew_foto.png'

    ]
];
