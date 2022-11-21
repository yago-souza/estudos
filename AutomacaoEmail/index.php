<?php
/*
Executa o arquivo
Recebe a data referente ao faturamento
Recebe valor total do faturamento
Acessa a pasta
Envia e-mail com arquivos anexados, data e faturamento



Olá bom dia.

Segue em anexos os retornos dos bancos referente ao dia 18/11/2022.

Faturamento referente ao dia 18/11/2022   R$ 383340,99.

Atenciosamente.

 */

echo "Digite a data do faturamento:" . PHP_EOL;
    $teclado = fopen('php://stdin', 'r');
        $dataInput = trim(fgets($teclado));

echo "Digite o valor total do faturamento:" . PHP_EOL;
$teclado = fopen('php://stdin', 'r');
$dataInput = trim(fgets($teclado));