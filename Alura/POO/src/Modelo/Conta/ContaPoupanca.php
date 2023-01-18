<?php

namespace Alura\Banco\Modelo\Conta;
## O PHP Storm já retorna o namespace de acordo com a classe mãe
## A classe ContaPoupanca extende a classe Conta
class ContaPoupanca extends Conta
{
    ## Chamando a função saca o PHP Storm retorna o metodo da outra classe para que possamos alterar na classe filha
    ## Sobre escreve o método da classe conta
    /**
        public function saca(float $valorASacar): void
        {
        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
        echo "Saldo indisponível";
        return;
        }

        $this->saldo -= $valorSaque;
        }
     */

    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}