<?php
//O str_replace substitui substrings por outros caracteres
$texto = 'Texto com qualquer coisa poxa e caramba.';

echo str_replace(
    ['poxa', 'caramba'],
    ['p','c','f'],
    $texto
) . PHP_EOL;

/*  O strtr substitui um caractere por outro, no caso a baixo o resultado é 
Te*t* c*m qualquer c*isa ***a e caramba.
ele substitui todas as letras dentro do segundo paramentro no texto do primeiro parametro.
echo strtr($texto, 'poxa','***');
*/
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']);