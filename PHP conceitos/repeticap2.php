<?php

for ( $contador = 1; $contador <= 15; $contador = $contador ++ ){
    //condição do IF diferente= "!="
    if ($contador != 13){
        //para continuar o loop use o continue 
        continue;
    } 
    echo "#$contador  " . PHP_EOL;
}