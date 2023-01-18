<?php

$idadeList = [21, 23, 50, 30, 92, 17, 38];

//esse comando moastra quantos valores eu tenho em uma lista,
//ou seja se a lista tiver 500 chaves, com dados, o count vai dizer que esse array tem 500 campos ou seja 
//500 chave e cada chave te um dado
echo count($idadeList) . PHP_EOL;
// o count também pode ser usado para definir o final de um loop, ex:
// for ($i = 0; $i < count($idadeList); $i++){
// assim o automaticamente o loop vai para quando acabar os itens do array


//dentro do for criamos a variavel $i que define onde começa, termina e os valores que vai aumentando 
for ($i = 0; $i < 7; $i++){
    //dentro do echo vai o que eu quero imprimi, que é o array
    //dentro do valor que eu quero do array eu coloco a variavel que $i,
    //ja que $i vai de 0 até 6, que são os valores do meu arry
    echo $idadeList[$i] . PHP_EOL;
}