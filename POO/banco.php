<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$segundaConta = new Conta('123.456.789-10', 'Vinicius Dias');


echo Conta::$numeroDeContas;