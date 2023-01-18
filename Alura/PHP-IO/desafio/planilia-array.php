<?php

$plan = file('Plan_ap.csv');

//var_dump($plan);

foreach ($plan as $linha => $valores) {
   $csv = explode(';', $valores);
}

$sql = "INSERT INTO S_APTHD
                    (
                    CCN,
                    ICN,
                    DATA_CRIACAO,
                    VALOR_PAGO
                    )
                    VALUES
                    (
                    'SPL',
                    'TESTE2',
                    '29/10/2022',
                    2.3,
                    )";