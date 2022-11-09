<?php

$APIkey = '96007ba9';

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
echo "tt$stringIMDBid" . PHP_EOL;

$url = "http://www.omdbapi.com/?i=tt$stringIMDBid&apikey=$APIkey";

$json = file_get_contents($url);
# Transforma o JSON em um objeto
#$arrayFilme = json_decode($json);
# Lê o Titulo do Objeto
#echo ($filme->Title);
# Transforma o JSON em array
$arrayFilme = json_decode($json, true);

$titulo = $arrayFilme['Title'];
$ano = $arrayFilme['Year'];
$lancamento = $arrayFilme['Released'];
$duracao = $arrayFilme['Runtime'];
$genero = $arrayFilme['Genre'];
$diretor = $arrayFilme['Director'];
$atores = $arrayFilme['Actors'];
# Inserir enredo completo
$enredo = $arrayFilme['Plot'];
$cartaz = $arrayFilme['Poster'];
# Ajustar tipo de variavel de Pontuação pois é um outro array
$pontuacao = $arrayFilme['Ratings'];


echo " $titulo, $lancamento, duração $duracao, Diretor $diretor \n\n $enredo";




#$arrayRetornoApi = explode(',', $retornoAPI);
#echo $retornoAPI . PHP_EOL;
#var_dump($retornoAPI);
#echo $arrayRetornoApi[0];
#var_dump($arrayRetornoApi);


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