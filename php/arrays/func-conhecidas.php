<?php

$vetor = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

//(cada item do array "as (como)" nome do item no array, nesse caso o indice do outro array)

foreach ($vetor as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}