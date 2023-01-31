<?php


$notas[
    'Ana' => 10,
    'joao' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

krsort($notas);
//sort tem muitas formas de ordernar a lista quando usar pesquisa as outras formas de usalo
var_dump($notas);

if (is_array($notas)){
    echo 'sim, é um array';
};

var_dump (rray_is_list($notas));

echo "Vinicius fez a prova: ";
var_dump (isset($notas['Vinicius']));
//usando a função isset podemos ver se o valor é nulo ou não
var_dump (array_key_exists('Vinicius', $notas));
//vemos se existe aquela chave ou não isso ajuda pra saber se o achave tem um valor 0 el tem um valor 
//0 não significa que ele seja nulo

echo "alguem tirou 10: :";
var_dump(is_array(10, $notas));

//array_key_exists = verifica se a chave existe
//in_array = verifica se o valor existe
//isset = verifica se a chave existe e não é nula
//array_search = verifica se a chave existe e tras o indicador

echo "Quem tirou 10: "; 
var_dump (array_search (10, $notas));