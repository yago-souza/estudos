<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petropolis',
    'Bairro Qualquer',
    'Minha Rua',
    '71B'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua ai',
    '50'
);

echo $umEndereco->cidade;


echo $umEndereco . PHP_EOL;
echo $outroEndereco;