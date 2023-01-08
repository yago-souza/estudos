<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Symfony\Component\DomCrawler\Crawler;

function retornaFilme($url) {

    # Recebe o JSON da API
    $json = file_get_contents($url);

    $arrayFilme = json_decode($json, true);

    $resposta = $arrayFilme['Response'];

    # Trata erro caso o usuário preencha um valor inválido no input
    if ($resposta == "False") {
        echo "Digite um filme válido ou deixe o campo em branco. \n\n";
    } else {
        $titulo = $arrayFilme['Title'];
        $ano = $arrayFilme['Year'];
        $lancamento = $arrayFilme['Released'];
        $duracao = $arrayFilme['Runtime'];
        $genero = $arrayFilme['Genre'];
        $diretor = $arrayFilme['Director'];
        $atores = $arrayFilme['Actors'];
        $enredo = $arrayFilme['Plot'];
        $cartaz = $arrayFilme['Poster'];
        $notaIMDB = $arrayFilme['Ratings'][0]['Source'];
        $valorIMDB = $arrayFilme['Ratings'][0]['Value'];
        $notaRT = $arrayFilme['Ratings'][1]['Source'];
        $valorRT = $arrayFilme['Ratings'][1]['Value'];

        $traduz = new GoogleTranslate('pt'); #tradus para portugues
        $traduz->setSource();
        $traduz->setTarget('pt');
        $enredoTraduzido = $traduz->translate($enredo);

        $teste = "\n\n Filme: $titulo \n Lançamento: $lancamento \n Duração: $duracao \n" .
            " Diretor: $diretor\n $notaIMDB: $valorIMDB \n $notaRT: $valorRT \n\n $enredoTraduzido \n\n ";
        echo $teste;
        echo "\n $url\n";
    }
}

function novaDica($listaFilmes, $APIkey){
    echo "Quer outra dica?(y/n)\n";
    # Recebe uma string digitada pelo usuario
    $teclado = fopen('php://stdin', 'r');
    # Tira a quebra de texto do input do teclado e armazena na variavel
    $tecladoResposta = trim(fgets($teclado));
    #return $tecladoResposta;

    if ($tecladoResposta == 'y') {
        # Gera um número aleatório entre 0 e 250
        $numAleatorio = mt_rand(0,249);
        popen('cls || clear','w');
        # Recebe um ID aleatorio da lista de array
        $stringIMDBid = $listaFilmes[$numAleatorio];

        # URL para pesquisa aleatoria
        $url = "http://www.omdbapi.com/?i=$stringIMDBid&apikey=$APIkey&plot=full";
        retornaFilme($url);
        novaDica($listaFilmes, $APIkey);
        echo "\n $url\n";
    }
}

function listaFilmes(){
    $client = new Client();
    $resposta = $client->request('GET', 'https://www.imdb.com/chart/top/?ref_=nv_mv_250');
    ## Recebe o HTML da página
    $html = $resposta->getBody();
    ## Cria um rastreador
    $crawler = new Crawler();
    ## Adiciona o retorno da pagina HTML ao leitor do dom
    $crawler->addHtmlContent($html);
    ##tag e classe no html que contem os cursos
    $titulos = $crawler->filter('td.titleColumn');

    $top250Filmes = fopen('250-melhores-IMDB2.txt', 'w');
    foreach ($titulos as $titulo) {
        $tituloFormatado = trim($titulo->textContent) . PHP_EOL;
        echo $tituloFormatado;
        fwrite($top250Filmes, $tituloFormatado);
    }
}

#listaFilmes();

$arquivo = fopen('250-melhores-IMDB2.txt', 'r');
#enquanto não atingir o fim do arquivo ele le a linha
while (!feof($arquivo)) {
    //le linha por linha
    $linha = fgets($arquivo);

    echo 1 . ltrim($linha);
}