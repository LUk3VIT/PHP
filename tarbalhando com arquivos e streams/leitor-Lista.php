<?php

//aqui nós ta pegando abrindo um arquivo
$arquivo = fopen('lista.txt', 'r') ;

/*
nesse loop falamos, que emquanto tem linha leia e quando acabar sai do loop
while (!feof($arquivo)){
    $nome = fgets($arquivo, 3);

    echo $nome;
}
*/

//pegando o tamanho do arquivo, para isso tem que ser o nome do arquivo e não a vaiavel
$tamanhoDoArquivo = filesize('lista.txt');

//aqui serve para ler o arquivo em intiro pegando byte por byte
$nome = fread ($arquivo, $tamanhoDoArquivo);
echo $nome;

//aqui nós fecha o arquivo que abrimos
fclose($arquivo);

//aqui o arquivo ja é aberto,lido e fechado 
$nome = file_get_contents('lista.txt');

echo $nome;