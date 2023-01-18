<?php

$notas = [
    ['aluno' => 'Maria',
     'nota' => 10,
     ],
     ['aluno' => 'Vinicius',
     'nota' => 6,
     ],
     ['aluno' => 'Ana',
     'nota' => 9,
     ]
    
];

function ordenaNotas (array $nota1, array $nota2) : int {
    /*o operador "<=>" retrna 1 se o primerio elemento($nota1) for maior que o segundo($nota2), -1 se o primeiro elemento($nota1) for menor que o segundo($nota2), 0 se eles forem iguais.
    Isso ordenaria as notas de forma crescente.
    Para ordem decresente é só mudar as notas de lugar
    */
    return $nota1['nota'] <=> $nota2['nota'];
}
usort($notas,'ordenaNotas');
var_dump($notas);

/*
$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas: ';
var_dump($notas);

echo 'Ordenadas: ';
var_dump($notasOrdenadas);

*/