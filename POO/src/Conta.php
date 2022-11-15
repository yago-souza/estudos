<?php
#teste commit pelo php storm
class Conta
{
    public static $numeroDeContas = 0;
    #O método construtor define os atributos na criação do objeto
    public function __construct(Titular $titular)
    {
        $this->Titular = $titular;
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

    public function recuperaNomeTitular():string
    {
        return $this->Titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->Titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas ()
    {
        return self::$numeroDeContas;
    }

    public function __destruct()
    {
            self::$numeroDeContas--;
    }
}