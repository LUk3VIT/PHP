<?php

//aqui o filtro é para escrever no console
$teclado = fopen ('php://stdin', 'r');
//aqui eu falo o meio que eu estou usando para escrever no console,
//que é teclado
$novaLista = fgets($teclado);
//lendo o arquivo que eu quero. mostrando o que eu vou usar para digitar, e dizendo para não sobreescrever aquilo que jas esta escrito
file_put_contents('lista.txt', " \n $novaLista", FILE_APPEND);
