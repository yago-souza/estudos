<?php

namespace Alura\Banco\Modelo;

class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    # Para criar o construtor para inicializar esses atributos é só apertar Alt + insert e selecionar todos os atributos
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    # Para criar os métodos getters e seter basta apertar Alt + insert
    # Alt + J seleciona todos os campos iguais e serve para substituir
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
