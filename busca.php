<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Fmlima4\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

// o trecho abaixo é para testar o autoload de uma clase fora do padrao psr4
// Teste::test();
// exit();

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

foreach ($cursos as $curso){
    exibeMsg($curso);
}
