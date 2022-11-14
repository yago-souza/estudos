
<?php

$nome = 'cam" /> <script>alert("teste");</script>';
/*
O addslashes retorna uma string com barras adicionadas antes de caracteres que precisam ser escapados.
aspas simples (')
aspas duplas (")
barra invertida (\)
NUL (o byte NUL)

input type = "text" name = "<?= addslashes($nome); ?>"
*/
?>

<input type = "text" name = "<?= htmlentities($nome);//converte tudo que pode ser código html para invalidar ?>"/>



htmlspecialchars(
    string $string,
    int $quote_style = ?,
    string $charset = ?)
: string

htmlentities(
    string $string,
    int $quote_style = ?,
    string $charset = ?,
    bool $double_encode = ?
): string