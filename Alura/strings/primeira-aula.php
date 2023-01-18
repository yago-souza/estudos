<?php

$nome = 'Yago Souza';

//verifica se um texto, nesse caso "Dias" existe dentro da variavel e retorna true ou false.
//var_dump(str_contains($nome, 'Dias'));
$daFamilia = str_contains($nome, 'Souza');

if ($daFamilia) {
    echo "$nome é da familia" . PHP_EOL;
} else {
    echo "$nome não é da familia" . PHP_EOL;
}