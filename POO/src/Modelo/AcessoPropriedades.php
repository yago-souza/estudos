<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        ## Concatena 'recupera' com o nome do Atributo
        # alterando a primeira letra para maiuscula
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}