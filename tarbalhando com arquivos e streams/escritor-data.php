<?php
/*
//o 'w' isso é uma mode e existe mais modes para isso tem que ver o fumulario na web
$arquivo = fopen('data-php.txt', 'w');

$data = 'doze de janeiro de dois mil evinte cinco ';

//aqui estou pegando a varialve $data e colocando ele na variével $arquivo
fwrite ($arquivo, $data);

fclose($arquivo);
*/

$data = " \n quize de março de dois mil evinte cinco ";

// nessa função agora eu puxei o arquivo escrevi e criei ela como txt, passei aquilo que eu preciso colocar
// e no terceiro parametro eu falo para a função que eu qeuro adicionar mais texto sem apagar o que ja exite,
//a terceiro função e flag
file_put_contents( 'data-php.txt', $data, FILE_APPEND);
