<?php

require_once 'vendor/autoload.php';
require_once 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://alura.com.br/']);
$crawler = new Crawler();
        /*## retorna na variavel resposta
        $resposta = $client->request('GET', 'https://alura.com.br/cursos-online-programacao/php');
        ## Recebe o HTML da página
        $html = $resposta->getBody();
        ## Cria um rastreador
        $crawler = new Crawler();
        ## Adiciona o retorno da pagina HTML ao leitor do dom
        $crawler->addHtmlContent($html);
        ##tag e classe no html que contem os cursos
        $cursos = $crawler->filter('span.card-curso__nome');
        */

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

## percorre toda a pagina retornando os cursos
foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}