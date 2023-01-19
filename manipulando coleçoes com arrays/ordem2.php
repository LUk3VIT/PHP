<?php

$notas = [
    [
        'anluno' => 'Maria',
        'nota' => 6,
    ],
    [
        'anluno' => 'Vinicius',
        'nota' => 10,
    ],
    [
        'anluno' => 'Ana',
        'nota' => 5,
    ],
];

function ordenaNotas (array $nota1,array $nota2): int{

    return  $nota1['nota'] <=>  $nota2['nota'];
    
}

usort($notas, 'ordenaNotas');
//usort permite que o usuario passe os parametros de como essa lista tem que ser ordenada
//para passar o parametro tem que ser atravez de uma funcao

var_dump($notas);
