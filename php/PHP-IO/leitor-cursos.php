<?php

$cursos = file('lista-cursos.txt');

var_dump($cursos);

/*abriu o arquivo para leitura
$arquivo = fopen('lista-cursos.txt', 'r');
enquanto não atingir o fim do arquivo ele le a linha
while (!feof($arquivo)) {
    //le linha por linha
    $linha = fgets($arquivo);
    echo $linha;
}

//O fread lê a quantidade de caracteres do arquivo
$tamanhoDoArquivo = filesize("lista-cursos.txt");
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;
//fecha o arquivo
fclose($arquivo);

/*Ler um arquivo todo de uma vez, embora seja bem simples, nem sempre é a solução mais inteligente.

Todo o conteúdo do arquivo é armazenado na RAM desta forma, então ao ler um arquivo muito grande, podemos acabar consumindo mais recursos do que o desejado.

Uma forma de resolver este problema, caso o seu código esteja organizado para informar todos os dados de uma vez, é estudar sobre Generators no PHP, mas isso foge do escopo deste treinamento.

*/
//transforma cada linha em array
$plan = file('Plan_Ap.csv');

function retornaLinha ($plan) {
    foreach ($plan as $linha) {
        return $linha;
    }
}
$texto = retornaLinha ($plan);

$array = explode(';', $texto);

var_dump($texto);
#foreach ($array as $linha => $item) {
#    echo trim($item). " - " . PHP_EOL;
#}


