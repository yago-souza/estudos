<?php

$email = 'vinicius@alura.com.br';
$senha = '123';
//strpos consulta a posução da substring recebendo a variavel e a substring e
$posiçãoDoArroba = strpos($email,'@');
// o substr recebe até 3 paramentros, variavel, posição de inicio e posição final
$usuario = substr($email,0,$posiçãoDoArroba);


echo substr($email, $posiçãoDoArroba+1) . PHP_EOL;
//consulta o tamanho da string em bytes

echo mb_strtoupper($usuario) . PHP_EOL;




