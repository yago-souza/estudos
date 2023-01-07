<?php

require_once 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

        popen('cls || clear','w');

        # Chave da API IMDB
        $APIkey = '96007ba9';
        # Cria um array com ID dos 250 melhores filmes segundo IMDB
        $listaFilmes = file('250-melhores-IMDB.txt', FILE_IGNORE_NEW_LINES);
        # Gera um número aleatório entre 0 e 250


        echo "Título do filme:\n";
            # Recebe uma string digitada pelo usuario
            $teclado = fopen('php://stdin', 'r');
                # Tira a quebra de texto do input do teclado e armazena na variavel
                $tituloInput = trim(fgets($teclado));
                    # Trata o titulo para ficar no formato da URL e armazena na variavel
                    $tituloFormatado = str_replace(' ', '+', $tituloInput);

        popen('cls || clear','w');

        # Se o campo de imput for diferente de vazio a pesquisa será feita por titulo senão será uma pesquisa entre os 250 melhores filmes do IMDB
        if ($tituloInput != "") {
            # URL para pesquisa por titulo
            $url = "http://www.omdbapi.com/?t=$tituloFormatado&apikey=$APIkey&plot=full";
            pesquisaFilme($url);
        } else {
            $numAleatorio = mt_rand(0,249);
            # Recebe um ID aleatorio da lista de array
            $stringIMDBid = $listaFilmes[$numAleatorio];

            # URL para pesquisa aleatoria
            $url = "http://www.omdbapi.com/?i=$stringIMDBid&apikey=$APIkey&plot=full";
            pesquisaFilme($url);
        }


        $novaDica = novaDica();

        if ($novaDica == 'y') {
            $numAleatorio = mt_rand(0,249);
            popen('cls || clear','w');
            # Recebe um ID aleatorio da lista de array
            $stringIMDBid = $listaFilmes[$numAleatorio];

            # URL para pesquisa aleatoria
            $url = "http://www.omdbapi.com/?i=$stringIMDBid&apikey=$APIkey&plot=full";
            pesquisaFilme($url);

            novaDica();
        }

        function pesquisaFilme($url) {

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
                #echo "\n $url\n";

            }
        }

        function novaDica(){
            echo "Quer outra dica?(y/n)\n";
            # Recebe uma string digitada pelo usuario
            $teclado = fopen('php://stdin', 'r');
            # Tira a quebra de texto do input do teclado e armazena na variavel
            $tecladoResposta = trim(fgets($teclado));
            return $tecladoResposta;
        }

