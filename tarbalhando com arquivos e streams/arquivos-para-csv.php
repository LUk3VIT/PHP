<?php

$minhaslistas = file('lista.txt');
$minhasdatas = file('data-php.txt');

$info = fopen('info.csv', 'w');

foreach ($minhasdatas as $data){
    $linha = [trim($data), 'Sim'];

    fputcsv($info, $linha, ';');
}

foreach ($minhaslistas as $lista) {
    $linha = [trim($lista), "Não"];

    fputcsv($info, $linha, ';');
}

fclose($info);