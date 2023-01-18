<?php

$csv = ',yago,22,solteiro\,';
//trim apara do inicio e do fim os caracteres escolhidos como parametro
echo trim($csv, '\,') . PHP_EOL;
//apara na esquerda
echo ltrim($csv, '\,') . PHP_EOL;
//apara na direita
echo rtrim($csv, '\,') . PHP_EOL;

