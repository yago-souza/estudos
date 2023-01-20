<?php

$peso = 120;
$altura = 1.75;

$resultado = round($peso/($altura**2),2);

    echo "\t$resultado";
if ($resultado < 18.5) {
    echo "\tDesnutrido";
} else if ($resultado < 24.99 and $resultado > 18.5) {
    echo "\tPeso normal";
} else if ($resultado < 29.9 and $resultado > 25) {
    echo "\tSobrepeso";
} else if ($resultado < 34.9 and $resultado > 30) {
    echo "\tObesidade I";
} else if ($resultado < 39.9 and $resultado > 35) {
    echo "\tObesidade II";
} else if ($resultado >= 40) {
    echo "\tObesidade III";
} 

/*
echo " $resultado \n $peso \n $altura";
*/

$resultado = $peso/($altura**2);

echo "\t\n".round($resultado,2);

switch ($resultado) {
    case $resultado < 18.5:
        echo "\tDesnutrido";
        break;
    case $resultado < 24.99 and $resultado > 18.5:
        echo "\tPeso normal";
        break;
    case $resultado < 29.9 and $resultado > 25:
        echo "\tExcesso de peso";
        break;
    case $resultado < 34.9 and $resultado > 30:
        echo "\tObesidade I";
        break;
    case $resultado < 39.9 and $resultado > 35:
        echo "\tObesidade II";
        break;
    case $resultado >= 40:
        echo "\tObesidade III";
        break;
}
