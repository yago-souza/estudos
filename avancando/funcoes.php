<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
};

function exibeConta(array $conta)
{
    echo "<li>Titular: $conta[titular] . Saldo: {$conta['saldo']} </li>";
}