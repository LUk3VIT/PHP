<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo',
    ]
]);

//fazeden uma requisição HTTP, e adicionando contexto
echo file_get_contents('http://httpbin.org/post', false, $contexto);