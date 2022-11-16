<?php

require_once 'Cpf.php';

class Titular
{
    private string $nome;
    private string $cpf;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->Cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular)<5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}