<?php

//array associativo
$contasCorrentes = [
        '12345678920' => [ 
            'nome' => 'Vinicius',
            'saldo' => 1000
        ], 
        '12345678912' =>   [
            'nome' => 'Maria',
            'slado' => 10000
        ], 
        '1234567892010' => 
        [
            'nome' => 'Alberto',
            'saldo' => '300'
        ]
];
//para adicionar em um array associativo tem que usar
//ter um cpf isso no nosso caso 

$contasCorrentes['123.258.821-00'] = [
    'nome' => 'Claudia',
    'saldo' => '2020'
];

//aqui tivemos que colocar um cpf para addicionar uma nova conta 
//dentro dos cochetes isso porque o os cpfs estão no formato de string e não numerico


//foreach == para cade... ( $variavel  {as} == como $variavel ){
// faça isso
//}
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}

// 