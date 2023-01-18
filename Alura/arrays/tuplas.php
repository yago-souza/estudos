<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

//list($nome, $nota, $idade) = $dados;
//o resultado é o mesmo entre a operação a cima e a operação a baixo.
//[$nome, $nota, $idade] = $dados;
//faz a mesma coisa mas não pode ser feito com variaveis não tratadas
extract($dados);

var_dump($nome, $nota, $idade);
//gera array a partir das variaveis
compact('nome', 'nota', 'idade');
