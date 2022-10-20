<?php
/*$i = 1;

while ($i <= 200 ) {

    if (($i % 10) == 0) {
        echo $i."\n";
        $i++;
    } else {
        echo "\t". $i."\t";
        $i++;
    }
    
}
*/
for ($i = 1; $i <= 50; $i++) {
    if (($i % 4) == 0) {
        echo "\tX\n";
    } else if (($i % 6) == 0) {
        echo "\tY\t";
    } else {
        echo "\tX\t";
    }
}