<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
## retorna na variavel resposta
$resposta = $client->request('GET', 'https://alura.com.br/cursos-online-programacao/php');
## Recebe o HTML da página
$html = $resposta->getBody();
## Cria um rastreador
$crawler = new Crawler();
## Adiciona o retorno da pagina HTML ao leitor do dom
$crawler->addHtmlContent($html);
##tag e classe no html que contem os cursos
$cursos = $crawler->filter('span.card-curso__nome');
## percorre toda a pagina retornando os cursos
foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}