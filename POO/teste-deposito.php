<?php

use Alura\Banco\Modelo\{Endereco, NomeInvalidoException};
use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-10'),
            'Ana',
            new Endereco('Cidade',
                'Bairro',
                'Rua',
                'numero')
        )
    );
} catch (NomeInvalidoException | InvalidArgumentException $exception) {
    echo $exception->getMessage();
}

try {
    $contaCorrente->deposita(300);
} catch (InvalidArgumentException) {
    echo "Valor a depositar precisa ser positivo";
}
##teste de commit