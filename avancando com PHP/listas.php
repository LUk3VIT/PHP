<?php

//arrays são agrupamentos de dados em forma de lista em ordem:
// 0, 1, 2, 3, 4, etc. cada um desses numero são chaves
$idadeList = [21, 23, 50, 30, 98, 17, 38];
//O array que esta em cima esta em ordem: 21=0, 23=1, 50=2, e assim vai,

//o que esta em baixo serve para pegar um valor de uma array,
//nesse caso eu chamei o quarto numero do array $idadeList, que ta na ordem 30=3;
$umaIdade = $idadeList[3];

//agora é so imprimir o valor que $umaIdade ta chamando no $idadeList, que é o arry
echo $umaIdade;