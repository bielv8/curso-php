<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <?php
        include "FUNCAO.php";
        /*
        * INCLUDE -> MESMO QUE NÃO ENCONTRE O ARQUIVO DA FUNÇÃO, O CÓDIGO DO SCRIPT PODERÁ SER EXECUTADO NORMALMENTE.
        * REQUIRE -> CASO O ARQUIVO DA FUNÇÃO NÃO EXISTA, O CÓDIGO DO SCRIPT NÃO SERÁ EXECUTADO.
        */
        mostraValor(4);
    ?>
</div>
</body>
</html>
