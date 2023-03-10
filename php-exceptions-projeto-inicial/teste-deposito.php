<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Conta\Titular;
use Alura\Banco\Modelo\CPF;

require_once'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 
        'Vinicius Dias',
        new Endereco('Cidade','bairro','rua','numero')
    )
);

try{
$contaCorrente->deposita(-100);
} catch (InvalidArgument $exception){
    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso";
}