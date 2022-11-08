<?php
//percorre todas as linhas dos dois arquivos
$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');
//cria a planilha cursos.csv
$arquivoCsv = fopen('cursos.csv', 'w');
// cria os arrays  de cada curso
foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Sim'];

    //escreve no arquivo csv a $linha separado por ';'
    fputcsv($arquivoCsv, $linha, ';');
    //fwrite($arquivoCsv, implode(',', $linha));
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');
    //fwrite($arquivoCsv, implode(',', $linha));
}

fclose($arquivoCsv);