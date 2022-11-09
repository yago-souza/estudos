<?php

echo "Título do filme:\n";
    $teclado = fopen('php://stdin', 'r');
#        $tituloInput = trim(fgets($teclado));
//Cria o array que vai receber valores aleatorios para o ID 
$IMDBid = [];
// Insere 7 numeros no array
for ($i=0; $i<7; $i++) {
    array_push($IMDBid, mt_rand(0,9));
}
//Transforma o array em string
$stringIMDBid = implode("", $IMDBid);
//adiciona o "tt" no array para identificar na API
echo "tt$stringIMDBid";

//Se o Título retornar vazio executar processo de consulta com id aleatorio
    //Se o retorno da API for false tentar novamente
//Se o Título vier preenchido consultar por ele
    //Se o retorno da API for false escrever "Filme não encontrado!"



/*
if ($tituloInput == "") {
    
}


echo "Diretor:\n";
    $teclado = fopen('php://stdin', 'r');
        $diretorInput = trim(fgets($teclado));

echo "Ator:\n";
     $teclado = fopen('php://stdin', 'r');
        $atorInput = trim(fgets($teclado));


function entradaDados ($texto) {
    $entrada = trim(fgets(fopen('php://stdin', 'r')));
    return $entrada;
}
*/

//echo "O filme $tituloInput é dirigido por $diretorInput e tem o ator/atriz $atorInput";