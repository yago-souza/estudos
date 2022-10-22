<?php
//inserir dados em um array usando estrutura de repetição e exibindo ele na tela.

function numImpar () {
    for($i=0;$i<100;$i++){
        if($i % 2 != 0) {
            echo $i;
        }
    }

}

//echo numImpar();

$numerosImpares = [];

for($i=1;$i<100;$i++){
    if($i % 2 != 0) {
        $numerosImpares += [ $i-1 => $i];
    }
}

foreach($numerosImpares as $indice => $numImpar) {
    echo "$indice =>  $numImpar" . PHP_EOL;
}
/*
for ($i=0; $i<=100; $i++){
    if($i % 2 != 0) {
        echo $numerosImpares[$i-1]. PHP_EOL;
        //$numerosImpares += [ $i-1 => $i];
    }
    
}

*/