<?php

$alunos2021[
    'Ana'
    'joao'
    'Maria'
    'Roberto'
    'Vinicius'
];

$novosAlunos[
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

//ajunção de array, dois ou mais 
//$alunos2022 = array_merge($alunos2021, $alunos2022);

//aqui ele esta desempacotando os arrays e um por um
$alunos2022 = [...$alunos2021, ...$novosAlunos];

//adicinando elementos no array 
array_push( $alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';


//adicionando elementos no inicio do array e tira o que estava em primeiro
//ou seja troca o primeiro por outro
array_unshift($alunos2022, 'Stephane', 'Rafaela');
//ele remove o ultimo elemento
array_pop($alunos2022) .PHP_EOL;



var_dump ($alunos2022);