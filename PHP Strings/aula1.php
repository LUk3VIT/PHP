<?php

$nome = 'Vinicius Dias';

//verificando se uma strigin existe dentro de outra
$ehDaMinhaFamilia = str_contains($nome, 'Dias');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minhya família" . PHP_EOL;
}else{
    echo "$nome Não é da minha família" . PHP_EOL;
}

