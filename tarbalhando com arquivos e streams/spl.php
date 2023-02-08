<?php 

$arquivosInfo = new SplFileObject('info.csv');

while (!$arquivosInfo->eof()){
    $linha = $arquivosInfo->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivosInfo->getCTime());

echo $data->format ('d/m/y') . PHP_EOL;