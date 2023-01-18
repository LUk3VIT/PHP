<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos ou\n";
echo "se tiver apartir de 16 acompanhado \n";

if ($idade >= 18 ) { // if ou se. Serve para criar condiçoes para seu codigo executar, quando as condiçoes foram atingidas
    //para adicionar mais que uma condição no if: exemplo
    // if ($idade >= 18 || $idade > 18); if ($idade >= 18 or $idade > 18) ou if ($idade >= 18 and $idade > 18).
    echo "Voce tem $idade anos. Pode entrar sozinho";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
} else { // else serve para termina uma condição quaso a primera não for se não faça isso e acaba. Para o if 
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
