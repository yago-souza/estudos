<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'Bairro teste', 'Rua teste', '37')
    )
);

$conta->deposita(500);
try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para realizar este saque.". PHP_EOL;
    echo $exception->getMessage();
}



echo $conta->recuperaSaldo();