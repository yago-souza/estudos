<?php

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá mundo');
print "Olá mundo";
