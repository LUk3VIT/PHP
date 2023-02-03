<?php

$url = 'https://alura.com.br';

//a função str_starts_with pega a primera string da variavel

if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo 'Não é uma url segura';
}

echo PHP_EOL;

//str_ends_with pega a ultima sting da variavel

if (str_ends_with($url, 'br')) {
    echo 'É um domínio do Brasil';
} else {
    echo 'Não é um domínio do Brasil';
}

echo PHP_EOL;
