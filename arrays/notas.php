<?php

$notas = [
    "Ana" => null,
    "João" => 8,
    "Yago" => 9,
    "Vitoria" => 9,
    "Pedro" => 6
];
// O "sort" ordena de forma cresente
//sort($notas);
// O "rsort" ordena de forma decresente
//rsort($notas);
//No "arsort" o "a" vem de assosiative, ele mantém as chaves e ordena de forma decresente
//o prefixo a funciona também o sort.
//arsort($notas);
///No "ksort" o "k" vem de key, ele ordena por chave.
// No usort o array é ordenado de acordo com a escolha do usuario
//no uksort ordena por chave
krsort($notas);
//var_dump($notas);

//gettype recebe o tipo da variavel
//echo gettype($notas);

// is_array($notas) é o mesmo de gettype($notas) === aray.
if (is_array($notas)) {
    echo 'Sim, é um array'. PHP_EOL;
}
//array_is_list($notas) Retorna um booleano informando se o arrai está listado em ordem
//var_dump(array_is_list($notas));
//verifica se uma chave existe dentro de um vetor
//var_dump(array_key_exists("Vitoria",$notas));
//Verifica se dentro do vetor existe esse indíce e se ele não é nulo.
//var_dump(isset($notas['Pedro']));
//verifica se um valor existre dentro do vetor, independente do indíce. O strict verifica o tripo de dado também, assim como o ===
//var_dump(in_array(9,$notas, strict:true));
// retorna a primeira chave que tenha o valor procurado no array;
echo array_search(9,$notas);