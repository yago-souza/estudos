<?php

## padrão PSR-4  autoloader Padrão seguido para carregar automaticamente a classe
## https://cursos.alura.com.br/course/php-oo-heranca-polimorfirmo-interfaces/task/66021

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    # src\Banco\Modelo\Endereco
    # src/Modelo/Endereco.php
    # Uma barra pode acabar escapando, nesse caso é usado duas barras em 'Alura\\Banco'
    $caminhoArquivo = str_replace('Alura\\Banco','src',$nomeCompletoDaClasse);
    # Adapta a barra de acordo com o sistema operacional
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    # Concatena a extenção no final do arquivo
    $caminhoArquivo .= '.php';

    # Se o arquivo existir ele é importado uma vez
    if(file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});