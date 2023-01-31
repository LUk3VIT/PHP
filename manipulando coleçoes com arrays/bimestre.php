<?php

$notasBimestre1 = [ 
    'Ana' => 10,
    'joao' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

$notasBimestre2[
    'Ana' => 10,
    'joao' => 8,
    'Roberto' => 7,
];


//função de diferença entre array
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);


//paga as chaves do array que é $alunosFaltantes
var_dump(array_keys($alunosFaltantes));
//paga os valores do array $alunosFaltantes
var_dump (array_values($alunosFaltantes))

//isso você pega valores e trasnforma em chaves e chaves transformão em valores
var_dump(array_combine($notasAlunos, $nomesAlunos))

//o que é chave vira rsultado e o que é resultado vira chave 
var_dump(array_flip($alunosFaltantes))