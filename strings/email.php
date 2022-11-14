<?php
/*
A sintaxe <<<'palavra' "texto" 'palavra'; (Heredoc e nowdoc)
Serve para escrever um texto sem trazer a identação.
*/
function geraEmail(): void {
    $conteudoEmail = <<<FINAL
    Olá, Fulano(a)!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}
    FINAL;

    echo $conteudoEmail;
}

geraEmail();