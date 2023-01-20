<?php

require_once 'autoload.php';

# Serve para utilizar o namespace nas classes
# O namespace serve para evitar conflitos de nomes entre classes
use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente};
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo ContaCorrente::recuperaNumeroDeContas();

#shift + F6 renomeia
#ctrl + alt + v extrai variavel
