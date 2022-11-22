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

$destinatario = "yago.souza@spaal.com.br";

$remetente = [
  'cobranca' => "cobranca@spaal.com.br",
  'silvio'  => "silvio@spaal.com.br",
];

$copia = [
    'oliva' => "a.oliva@spaal.com.br",
    'carla' => "carla@spaal.com.br",
];

echo "Digite a data do faturamento:" . PHP_EOL;
    $teclado = fopen('php://stdin', 'r');
        $dataInput = trim(fgets($teclado));

echo "Digite o valor total do faturamento:" . PHP_EOL;
    $teclado = fopen('php://stdin', 'r');
        $faturamentoInput = trim(fgets($teclado));


/**
 * Crirar função para percorrer array de emails
 * criar função para anexar arquivos
 * Criar função para mover arquivos para pasta de enviados ou apagar arquivos
 */


function geraEmail(string $data, string $faturamento, array $remetente, array $copia) {
    $assunto = "Faturamento referente a $data";
    $remetente = $remetente['cobranca'];
    $copia = $copia['oliva'];


    $conteudoEmail = <<<FINAL
    Para: $remetente;
    Cópia: $copia;

Olá bom dia.

Segue em anexos os retornos dos bancos referente ao dia $data.

Faturamento referente ao dia 18/11/2022   R$ $faturamento.

Atenciosamente.

{ASSINATURA}
FINAL;
    return $conteudoEmail;
}

echo geraEmail($dataInput, $faturamentoInput, $remetente, $copia);