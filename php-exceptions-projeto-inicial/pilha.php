<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    /*try {
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'valor';
    } catch (RuntimeException $problema) {
        echo "Aconteceu um erro na funcção 1" .PHP_EOL;
    }*/
    //intdiv(5, 0);

    try{
        funcao2();
        //multi catch, e utilizando a variavel problema
    } catch (RuntimeException | DivisionByZeroError $problema) {
        //falar qual é o problema
        echo $problema->getMessage() . PHP_EOL;
        //diz qual linha esta o problema, se por file mostra em qual arquivo esta
        echo $problema->getLine() . PHP_EOL;
        //aqui seria o que chamou o que deu esse erro ou cal stack
        echo $problema->getTraceAsString() . PHP_EOL;
    }


    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    
    $exception = new RunTimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
