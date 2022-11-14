<?php

class Conta
{
    public static $numeroDeContas = 0;
    #O método construtor define os atributos na criação do objeto
    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar <= 0) {
            echo "O valor precisa ser positivio";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    //getSaldo
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    //getCpfTitular
    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }
    //getNomeTitular
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular)<5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function recuperaNumeroDeContas ()
    {
        return self::$numeroDeContas;
    }
}