<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
        $this->validaCpf($cpf);
    }

    private function validaCpf(string $cpf)
    {
        if(strlen($cpf) < 14) {
            echo "Número de cpf inválido";
            exit();
        }
    }
    public function recuperaCpf(): string
    {
        return $this->cpf;
    }
}