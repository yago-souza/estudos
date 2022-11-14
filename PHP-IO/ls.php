<?php

$diretorioAtual = dir('.');
//escreve o caminho completo do diretorio atual
echo $diretorioAtual->path . PHP_EOL;

//enquanto conseguir ler algum arquivo no diretorio atual escreve o nome do arquivo
while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}
