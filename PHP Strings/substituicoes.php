<?php

$texto = 'texto com qualquer coisa poxa e caramba';


//função de substituição ele recebe por parametro o que ele vai mudar, pelo o que ele vai mudar e onde ele vai mudar
//mais aqui ele muda as palvra inteira
echo str_replace(

    ['poxa', 'caramba'],
    ['p','c'], 
    $texto

) . PHP_EOL;

///função de substituição ele recebe por parametro onde vai mudar, o que vai mudar, e polo que muda
//mais aqui ele muda só os caracteres

echo strtr ($texto, 'poxa', '***') . PHP_EOL;
//uma variação da função  que eu passo em forma de array e muda apalavra por inteiro 
echo strtr ($texto, [
    'poxa' => 'p',
    'caramba' => 'c'
]) . PHP_EOL;