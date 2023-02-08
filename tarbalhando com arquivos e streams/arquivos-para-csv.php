<?php

$minhaslistas = file('lista.txt');
$minhasdatas = file('data-php.txt');

$info = fopen('info.csv', 'w');

foreach ($minhasdatas as $data){
    $linha = [trim(utf8_decode ($data)), 'Sim'];

    fputcsv($info, $linha, ';');
}

foreach ($minhaslistas as $lista) {
    $linha = [trim(utf8_decode ($lista)), "Não"];

    fputcsv($info, $linha, ';');
}

fclose($info);