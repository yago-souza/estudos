<?php

namespace Alura\Banco\Modelo\Conta;

## Para ter um método abstrato a conta precisa ser abstrata
use http\Exception\InvalidArgumentException;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;


    # O método construtor define os atributos na criação do objeto
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new InvalidArgumentException();
        }

        $this->saldo += $valorADepositar;
    }

    //getSaldo
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
    ## Abstração para que um metodo seja obrigatorio em classes filhas
    ## Para ter um método abstrato a conta precisa ser abstrata
    abstract protected function percentualTarifa(): float;
}
