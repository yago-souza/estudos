<?php
// caso não encrontre o arquivo o php apenas dá um aviso
// util para arquivos não exenciais
//include 'funcoes.php';
//Caso o arquivo a ser incluído não seja encontrado, require para a execução do programa enquanto include permite que continue.
//inclue o arquivo apenas uma vez
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);
/*
unset($contasCorrentes['123.456.689-11'], $contasCorrentes['123.456.789-10'] );
*/
titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
/*
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular'];?> - <?= $cpf; ?></h3>
        </dt>
        <dd><?= "Saldo: " . $conta['saldo']?></dd>
        <?php } ?>
    </dl>

</body>
</html>



