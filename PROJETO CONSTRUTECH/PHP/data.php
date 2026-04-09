<?php

$categorias = [
    'bruto' => 'Bruto',
    'ferramentas' => 'Ferramentas',
    'acabamento' => 'Acabamento',
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
    ],
    [
        'id'=> 2,
        'nome'=> 'Cimento',
        'marca'=> 'Portland',
        'quantidade_minima'=> 50,
        'quantidade_atual'=> 30,
        'preco_unitario'=> 25.00,
        'preco_total'=> 750.00,
        'imagem'=> '2.png'
    ],
    [
        'id'=> 3,
        'nome'=> 'Tijolo',
        'marca'=> 'Cerâmica',
        'quantidade_minima'=> 200,
        'quantidade_atual'=> 180,
        'preco_unitario'=> 1.00,
        'preco_total'=> 180.00,
        'imagem'=> '3.png'
    ]
]


?>