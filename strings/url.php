<?php

$url = 'https://alura.com.br';
//consulta uma substring no inicio da string
if (str_starts_with($url,'https')) {
    echo "É uma URL segura";
} else {
    echo "Não é uma URL segura";
}

echo PHP_EOL;
//consulta uma substring no fim da string
if (str_ends_with($url, '.com.br')) {
    echo "E é um dominio do Brasil";
} else {
    echo "Não é um dominio do Brasil";
}
