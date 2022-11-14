<?php

$telefones = ['(11) 99999 - 9999', '(11) 99999 - 2222', '(11) 99999 - 3333', '(11) 99999 - 1111'];

foreach ($telefones as $telefone) {
    //Primeiro parametro é a expreção regular e o segunndo é o que nós queremos avaliar.
    $telefoneValido = preg_match(
        '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/',
         $telefone);
    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }
}