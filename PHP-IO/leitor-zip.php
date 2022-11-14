<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
    ]);
echo file_get_contents('zip://arquivos.zip#lista-cursos.txt', false, $contexto);

//fopen('arquivo', 'modo', false(se vai buscar o arquivo em um lugar extra), $contexto)
//stream é um fluxo de dados com entrada e saida e pode ter filtros
/*Nesta aula, aprendemos:

Que é possível adicionar informações à leitura (ou escrita) de streams através de contextos
Que a função responsável para criar contextos é a stream_context_create
Que cada wrapper de stream possui suas possíveis opções de contexto
Em http://, vimos como definir o método, cabeçalhos e conteúdo da requisição
Em zip://, nós aprendemos a definir a senha para abrir o arquivo */