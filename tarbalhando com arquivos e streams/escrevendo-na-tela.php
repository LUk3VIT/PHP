<?php

$lista = fopen('zip://arquivos.zip#lista.txt', 'r');
stream_copy_to_stream($lista, STDOUT);