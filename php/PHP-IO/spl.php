<?php

//le o arquivo o padrão é de leitura ('r')
$arquivoCursos = new SplFileObject('cursos.csv');
//enquanto não achar o final do arquivo vai ler uma linha em csv
while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');
    //O utf8_encode coloca na tabela utf8
    echo utf8_encode($linha[0]) . PHP_EOL;
}
// retorna um timestamp do arquivo
//echo $arquivoCursos -> getCTime();
//cria uma variavel com data
$date = new DateTime();
echo $date->format('d/m/Y') . PHP_EOL;
//insere a data de modificação do arquivo na variavel data
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');
