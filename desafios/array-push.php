<?php
//inserir dados em um array usando estrutura de repetição e exibindo ele na tela.

$numerosImpares = [];
/*
for($i=1;$i<100;$i++){
    $p = $i;
    
    if($i % 2 != 0) {
        $impar = $i;
        return $impar;
        echo $i;
    }
    echo $p.$impar;
    $numerosImpares += [ $p => $impar];
    echo $numerosImpares[0];
}
*/

for($i=1;$i<100;$i++){
    if($i % 2 != 0) {
        //$numerosImpares += [ $i*0.5 => $i];
        //$numerosImpares [] = $i;
        array_push($numerosImpares, $i);
    }
}

foreach($numerosImpares as $indice => $numImpar) {
    echo "$indice =>  $numImpar \t" ;
}
/*
for ($i=0; $i<=100; $i++){
    if($i % 2 != 0) {
        echo $numerosImpares[$i-1]. PHP_EOL;
        //$numerosImpares += [ $i-1 => $i];
    }
    
}
*/