<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    <h1>Variáveis data e hora (PHP dia 003/100)</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); //Hora Local
        echo "Hoje é dia " . date("d/M/Y"); //Data configurada no servidor
        echo " e a hora atual é " . date("G:i:s"); //Hora configurada no servidor
    ?>
</body>
</html>