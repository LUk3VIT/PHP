<?php

$telefone = ['(24) 99999 - 9999', '(21) 99999 - 9999','(26) 99999 - 9999'];

foreach ($telefone as $telefone) {
    $telefoneValido = preg_match(

        '/\([0-9]{2}\) cls9?[0-9]{4} - [0-9]{4}/', 

        $telefone
    );
    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }
}