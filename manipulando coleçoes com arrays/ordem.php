<?php

$notas = [
    'um',
    'dois',
    'tres'
];

$notosOrdenadas = $notas;
sort($notasOrdenadas);
//o sort ele ordena o array, do menor para o maior em valor int.
//ja em string o o sort ele ordena o valor em ordem alfabetica

echo 'Desordenada: ';
var_dump($notas);
//roda o que nos ta vendo e tras a informacao dos tipos de arquivo

echo 'Ordenada: ';
var_dump($notasOrdenadas);
