<?php

$notasBimestre1 = [
    "Ana" => 5,
    "João" => 8,
    "Yago" => 9,
    "Vitoria" => 9,
    "Pedro" => 6
];

$notasBimestre2 = [
    "Ana" => null,
    "João" => 8,
    "Yago" => 9,
    "Vitoria" => 9,
    "Pedro" => 6
];
/* O array_diff verifica a diferença entre valores de dois vetores, se a aluna Vitoria for apagada ele não encrontrará diferença pois o aluno Yago tirou a nota 9.
Se o aluno tirar uma nota diferente no outro bimestre ele também aponta.
*/
//Com o array_diff_key os valores são ignorados
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
//array_diff_assoc compara tanto a chave quanto o valor
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//No exercico a baixo apenas o elemento 2 do array1 não está presente nos outros arrays, como ele é o segundo elemento sua chave é 1
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

var_dump (array_diff($array1, $array2, $array3));