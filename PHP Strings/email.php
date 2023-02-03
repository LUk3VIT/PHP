<?php


function geraEmail(string $nome): void
{

    //a palavra <<<FINAL que dizer que quadan aparecer denovo FINAL
    //vai parar com a string. obs: rodar o codigo para entender mais
    $conteudoEmail = <<<FINAL

    olá, $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}
    FINAL;

    echo $conteudoEmail;

}

geraEmail('Luca Dias');