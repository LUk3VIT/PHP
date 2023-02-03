<?php
$nome = 'Vinícius Dias';
$email = ' lucas@gmail.com ';
$senha = '123';


//strlen mede o tamnho da string
if (strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
};

$posicaoDoArroba = strpos($email, '@gmail.com'); // buscar um elemento especifo dentro de uma string

// substr é uma funcão que tira uma quantidade de valores de um sting
// a quantidade tem que ser definida no parametro

$usario = substr($email, $posicaoDoArroba) . PHP_EOL;

//strtoupper = ele compia o parametro e deixa tudo no tamanho maiuscula || 
//strtolower = diminui o tamanho da strng que vem no parametro

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

//o explode ele quebra as palavras que tem em uma string, que retornam em forma de array
list($nome, $sobrenome) = explode(' ', $nome);

echo'Nome: ' . $nome . PHP_EOL;
echo'Sobrenome: ' . $sobrenome .PHP_EOL;

$csv = 'Lucas Dias,24,lucasdiass061@gmail.com';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;