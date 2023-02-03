<?php

$csv = ',.Lucas Dias,18,';
//essa função serve para aparar tirar coisa que não serve para string
//obs ele so apara nas pontas da string
echo trim($csv, '.,') . PHP_EOL;

//aparando so um lado da string
echo rtrim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;