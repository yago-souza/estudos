<?php
//todos os numeros impares até 100

for ($i = 0; $i <= 100; $i++) {
    
    if (($i % 2) != 0) {

        echo "\t$i\t";

        if(($i % 5) == 0 ){
            echo "\t$i\n";
        }
    } 
}