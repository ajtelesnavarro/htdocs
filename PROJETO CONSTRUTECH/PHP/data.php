<?php

$categorias = [
    'bruto' => 'Bruto',
    'ferramentas' => 'Ferramentas',
    'acabamento' => 'Acabamento',
];

$categorias_fornecedores = [
    'base_estrutura' => 'Base e Estrutura',
    'hidraulica_esgoto' => 'Hidráulica e Esgoto',
    'revestimentos' => 'Revestimentos',
];

$produtos_base = [
    [
        'id' => 1,
        'nome' => 'Martelo',
        'marca' => 'Portland',
        'quantidade_minima' => 30,
        'quantidade_atual' => 50,
        'preco_unitario' => 25.00,
        'preco_total' => 750.00,
        'imagem' => '1.png',
        'categoria' => 'bruto'
    ],
    [
        'id' => 2,
        'nome' => 'Cimento',
        'marca' => 'Portland',
        'quantidade_minima' => 50,
        'quantidade_atual' => 30,
        'preco_unitario' => 25.00,
        'preco_total' => 750.00,
        'imagem' => '2.png',
        'categoria' => 'ferramentas'
    ],
    [
        'id' => 3,
        'nome' => 'Tijolo',
        'marca' => 'Cerâmica',
        'quantidade_minima' => 200,
        'quantidade_atual' => 180,
        'preco_unitario' => 1.00,
        'preco_total' => 180.00,
        'imagem' => '3.png',
        'categoria' => 'acabamento'
    ]
];


$fornecedores_base = [
    [
        'id_2' => 1,
        'fornecedor' => 'Votorantim',
        'especialidade' => 'Base e Estrutura',
        'marca_principal' => 'Cimento Itaú, Votomassa',
        'troca_devolucao' => 'Só sacos rasgados no ato',
        'prazo_entrega' => '24h a 48h',
        'nome_consultor' => 'Marcos Souza',
        'contato' => '(11) 98888-7777',
        'email' => 'pedidos@votorantim.com.br',
        'cnpj' => '01.234.567/0001-89',
        'pagamento_condicacao' => 'Boleto 28 dias',
        'pedido_min' => 'R$ 2.000,00',
        'confiabilidade' => 'Alta - Líder de mercado',
    ],

    [
        'id_2' => 2,
        'fornecedor' => 'Lafarge',
        'especialidade' => 'Base e Estrutura',
        'marca_principal' => 'Cimento Lafarge, Areia, Brita',
        'troca_devolucao' => 'Devolução de embalagens até 30 dias',
        'prazo_entrega' => '24h a 72h',
        'nome_consultor' => 'Carlos Mendes',
        'contato' => '(11) 99999-8888',
        'email' => 'vendas@lafarge.com.br',
        'cnpj' => '02.345.678/0001-90',
        'pagamento_condicacao' => 'Boleto 21 dias',
        'pedido_min' => 'R$ 1.500,00',
        'confiabilidade' => 'Excelente qualidade',
    ],

    [
        'id_2' => 3,
        'fornecedor' => 'Cimpor',
        'especialidade' => 'Base e Estrutura',
        'marca_principal' => 'Cimento Branco, Cimento Estrutural',
        'troca_devolucao' => 'Embalagens lacradas até 15 dias',
        'prazo_entrega' => '48h',
        'nome_consultor' => 'Roberta Silva',
        'contato' => '(11) 98765-4321',
        'email' => 'pedidos@cimpor.com.br',
        'cnpj' => '03.456.789/0001-91',
        'pagamento_condicacao' => 'Boleto 35 dias',
        'pedido_min' => 'R$ 2.500,00',
        'confiabilidade' => 'Alta - Referência técnica',
    ],

    [
        'id_2' => 4,
        'fornecedor' => 'Amanco Wavin',
        'especialidade' => 'Hidráulica e Esgoto',
        'marca_principal' => 'Amanco, QuickCheck',
        'troca_devolucao' => '30 dias p/ defeito fábrica',
        'prazo_entrega' => 'Toda Terça e Quinta',
        'nome_consultor' => 'Cláudia Lira',
        'contato' => '(11) 97777-6666',
        'email' => 'vendas@amanco.com.br',
        'cnpj' => '12.345.678/0001-00',
        'pagamento_condicacao' => 'Boleto 14/28/42 dias',
        'pedido_min' => 'R$ 1.500,00',
        'confiabilidade' => 'Excelente prazo',
    ],

    [
        'id_2' => 5,
        'fornecedor' => 'Tigre',
        'especialidade' => 'Hidráulica e Esgoto',
        'marca_principal' => 'Tubos PVC, Conexões, Registros',
        'troca_devolucao' => 'Garantia de fábrica 36 meses',
        'prazo_entrega' => '3 a 5 dias úteis',
        'nome_consultor' => 'Fernando Costa',
        'contato' => '(11) 96543-2109',
        'email' => 'comercial@tigre.com.br',
        'cnpj' => '13.456.789/0001-01',
        'pagamento_condicacao' => 'Crédito 30/60 dias',
        'pedido_min' => 'R$ 1.000,00',
        'confiabilidade' => 'Excelente durabilidade',
    ],

    [
        'id_2' => 6,
        'fornecedor' => 'TUPY',
        'especialidade' => 'Hidráulica e Esgoto',
        'marca_principal' => 'Tubulações, Joelhos, Tampos',
        'troca_devolucao' => 'Troca de peças com defeito até 60 dias',
        'prazo_entrega' => '5 a 7 dias úteis',
        'nome_consultor' => 'Patricia Oliveira',
        'contato' => '(11) 95432-1098',
        'email' => 'pedidos@tupy.com.br',
        'cnpj' => '14.567.890/0001-02',
        'pagamento_condicacao' => 'Boleto antecipado 10% desc',
        'pedido_min' => 'R$ 2.000,00',
        'confiabilidade' => 'Qualidade Premium',
    ],

    [
        'id_2' => 7,
        'fornecedor' => 'Pisos Porto Ferreira',
        'especialidade' => 'Revestimentos',
        'marca_principal' => 'Cerâmicas, Pisos Externos',
        'troca_devolucao' => 'Quebras acima de 3% da carga',
        'prazo_entrega' => '7 a 10 dias úteis',
        'nome_consultor' => 'Elaine Pisos',
        'contato' => '(19) 92222-1111',
        'email' => 'porto@ferreira.com.br',
        'cnpj' => '67.890.123/0001-55',
        'pagamento_condicacao' => '50% sinal + 50% entrega',
        'pedido_min' => '50 m²',
        'confiabilidade' => 'Qualidade Premium',
    ],

    [
        'id_2' => 8,
        'fornecedor' => 'Brasital Revestimentos',
        'especialidade' => 'Revestimentos',
        'marca_principal' => 'Pisos, Azulejos, Pastilhas',
        'troca_devolucao' => 'Troca de peças com defeito 100 dias',
        'prazo_entrega' => '5 a 8 dias úteis',
        'nome_consultor' => 'Gustavo Rocha',
        'contato' => '(11) 94321-0987',
        'email' => 'vendas@brasital.com.br',
        'cnpj' => '15.678.901/0001-03',
        'pagamento_condicacao' => 'Boleto 28/56 dias',
        'pedido_min' => '30 m²',
        'confiabilidade' => 'Variedade de cores',
    ],

    [
        'id_2' => 9,
        'fornecedor' => 'Portobello',
        'especialidade' => 'Revestimentos',
        'marca_principal' => 'Porcelanatos, Pisos Estilo',
        'troca_devolucao' => 'Troca de peças com defeito 60 dias',
        'prazo_entrega' => '4 a 6 dias úteis',
        'nome_consultor' => 'Mariana Santos',
        'contato' => '(11) 93210-6789',
        'email' => 'vendas@portobello.com.br',
        'cnpj' => '16.789.012/0001-04',
        'pagamento_condicacao' => '50% sinal + 50% entrega',
        'pedido_min' => '40 m²',
        'confiabilidade' => 'Alto padrão',
    ],

];

?>