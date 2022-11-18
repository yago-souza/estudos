<?php

namespace Alura\Banco\Modelo;


/**
 *  Class Endereco
 * @package Alura\Banco\Modelo
 * Adiciona um campo de leitura nesse caso para a IDE ajudar na chamada
 * @property-read string $cidade
 *   @property-read string $bairro
 *   @property-read string $rua
 *   @property-read string $numero
 *
 */
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

    ## Transforma o objeto em uma string formatada
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}.";
    }

    ## O método mágico __get chamado sempre que um atributo
    ## for acessada sem que você tenha acesso para leitura
    public function __get(string $nomeAtributo)
    {
        ## Concatena 'recupera' com o nome do Atributo
        # alterando a primeira letra para maiuscula
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

}


