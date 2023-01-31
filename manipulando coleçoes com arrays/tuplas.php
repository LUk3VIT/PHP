<?php

$dados = [
    'nome' => 'Vinicius', 
    'nota' => 10, 
    'idade' => 24
];

//['nome' => $nome,'nota' => $nota,'idade' => $idade] = $dados;
//tomar cuidado ver o formulario antes de usar
extract($dados);

var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));



















//loop para list

$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach($contas['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais";
};