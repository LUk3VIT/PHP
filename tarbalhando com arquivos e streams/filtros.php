<?php

require 'meuFiltro.php';

$arquivo = fopen ('lista.txt', 'r');

stream_filter_register('alura.partes', meuFiltro::class);
//colocando um filtro em um arquivo, é possivel usar mais que um filtro
stream_filter_append($arquivo, 'string.toupper');

echo fread($arquivo, filesize('lista.txt'));

fclose($arquivo);