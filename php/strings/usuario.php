<?php

$nome = 'Vínicius Dias';
$email = 'vinicius@alura.com.br';
$senha = '123';
//strpos consulta a posução da substring recebendo a variavel e a substring e
$posiçãoDoArroba = strpos($email,'@');
// o substr recebe até 3 paramentros, variavel, posição de inicio e posição final
$usuario = substr($email,0,$posiçãoDoArroba);


//echo substr($email, $posiçãoDoArroba+1) . PHP_EOL;
//consulta o tamanho da string em bytes

//echo mb_strtoupper($usuario) . PHP_EOL;

//mb_strlen conta a quantidade de caracteres

//aplicando p list de forma abreviada no lugar de list($nome, $sobreNome)
//o comando explode separa uma sitring a partir do valor definido (transforma item em array) e voccê pode definir um limite de array
[$nome, $sobreNome] = explode(' ', $nome);

//echo "Nome: $nome \n";
//echo "Sobrenome: $sobreNome \n";


$csv = 'Vínicius Dias,24,vinicius@alura.com.br';
var_dump(explode(',',$csv));