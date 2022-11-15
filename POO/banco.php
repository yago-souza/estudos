<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';


$vinicius = new Titular('123.456.789-10', 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$patricia = new Titular('123.456.789-10', 'Vinicius Dias');
$segundaConta = new Conta($patricia);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo Conta::$numeroDeContas . PHP_EOL;

#shift + F6 renomeia
#ctrl + alt + v extrai variavel
