<?php

//arrays sociativo,
//arrays sociativo serve para guardar mais de uma informção no arry
//e dar um valor especifico para uma chave como 'nome' é um valor para ser chamado
//dentro dele tem um valor que é 'Vinicius'
//ex: abaixo


//$variavel = [
// 'indice' => 'chave',
// 'indice' => 'chave'
//]
$conta1 = [ 
    'nome' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'nome' => 'Maria',
    'slado' => 10000
];

$conta3 = [
    'nome' => 'Alberto',
    'saldo' => '300'
];

//para imprimir um valor de uma array associativa, segue o exemplo:
//echo $conta2['nome'];

//aqui tem um array de array:
//ou seja lista de dados complexos
$contasCorrentes = [$conta1, $conta2, $conta3];

//dentro desse lop eu passo por todas as contas que são array,
//que estão dentro de um array listadas.
for ($i = 0; $i < count($contasCorrentes); $i++) {
    //no echo eu chamo o array e dentro do primera CHAVE eu falo quantas vez tem que repitir o array
    //e na segunda CHAVE eu coloco os indicies das contas 1,2 e 3.
    // e imprimo as chaves 
    echo $contasCorrentes[$i]['nome'] . PHP_EOL;
}

