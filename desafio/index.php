<?php
        # Chave da API IMDB
        $APIkey = '96007ba9';
        # Cria um array com ID dos 250 melhores filmes segundo IMDB
        $listaFilmes = file('250-melhores-IMDB.txt', FILE_IGNORE_NEW_LINES);
        # Gera um número aleatório entre 0 e 250
        $numAleatorio = mt_rand(0,250);



        echo "Título do filme:\n";
            $teclado = fopen('php://stdin', 'r');
                # Tira a quebra de texto do input do teclado e armazena na variavel
                $tituloInput = trim(fgets($teclado));
                # Trata o titulo para ficar no formato da URL e armazena na variavel
                $tituloFormatado = str_replace(' ', '+', $tituloInput);

        # Recebe um ID aleatorio da lista de array
        $stringIMDBid = $listaFilmes[$numAleatorio];


        if ($tituloInput != "") {
            # URL para pesquisa por titulo
            $url = "http://www.omdbapi.com/?t=$tituloFormatado&apikey=$APIkey";
            
        } else {
            # URL para pesquisa aleatoria
            $url = "http://www.omdbapi.com/?i=$stringIMDBid&apikey=$APIkey";
        }

        echo "\n    $url    \n";


        # Recebe o JSON da API
        $json = file_get_contents($url);
        
        $arrayFilme = json_decode($json, true);

        $resposta = $arrayFilme['Response'];
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


        echo "\n\n Retorno: $resposta \n\n Filme: $titulo \n Lançamento: $lancamento \n Duração: $duracao \n Diretor: $diretor \n\n $enredo \n\n";
