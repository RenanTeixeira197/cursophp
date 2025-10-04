<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>

    <main>
        <p>Quantos reais você tem na cartera?</p>
        <form method="get">
            <input type="text" name="conversor">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php 
       $valor = isset($_GET["conversor"]) ? floatval($_GET["conversor"]) : 0;
       $dolar = $valor / 5.34;
       echo "Seus $valor equivalem a US$: $dolar";
    ?>
</body>
</html>