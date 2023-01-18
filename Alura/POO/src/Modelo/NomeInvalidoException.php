<?php

namespace Alura\Banco\Modelo;

class NomeInvalidoException extends \LengthException
{
    public function __construct()
    {
        $mensagem = "Nome pequeno demais.";
        parent::__construct($mensagem);
    }
}