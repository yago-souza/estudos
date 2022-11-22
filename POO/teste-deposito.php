<?php

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Ana Paula',
        new Endereco('Cidade',
            'Bairro',
            'Rua',
            'numero')
    )
);

try {
    $contaCorrente->deposita(-300);
} catch (InvalidArgumentException) {
    echo "Valor a depositar precisa ser positivo";
}
