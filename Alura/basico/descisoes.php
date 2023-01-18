<?php

$idade = 18;
$acompanhado = true ;

echo "\n\tVocê só pode entrar se tiver mais do que 18 anos. \n";

if ($idade >= 18) {
    echo "\n \tVocê tem $idade anos. Pode entrar\n";
} else if ($idade >= 16 and $acompanhado) {
    echo "\n\tVocê tem $idade anos, mas está acompanhado. Pode entrar!\n";
} else {
    echo "\n\tVocê tem $idade anos e não está acompanhado. Não pode entrar!\n";
}
