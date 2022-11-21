<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExecao) {
        echo $erroOuExecao->getMessage().PHP_EOL;
        echo $erroOuExecao->getLine().PHP_EOL;
        echo $erroOuExecao->getTraceAsString().PHP_EOL;
        throw new RuntimeException(
            'Exceção foi tratada, mas, pega ai',
                1,
            $erroOuExecao
            ).PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{

    echo 'Entrei na função 2' . PHP_EOL;
    ## Mensagem, cógigo, e se houve outra exceção antes dessa
    ##$exception =  new RuntimeException('', 0, new RuntimeException());
    throw new RuntimeException();

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;