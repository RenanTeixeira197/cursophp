<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Consumo de Combustível</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dist">Distancia Percorrida (Km):</label>
            <input type="number" name="dist" id="idist">

            <label for="cons">Consumo de Combustível (Litro):</label>
            <input type="number" name="cons" id="icons">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h1>Resultado:</h1>
        <?php 
           if (isset($_GET['dist']) && isset($_GET['cons']) && $_GET['dist'] !== '' && $_GET['cons'] !== '' && $_GET['cons'] != 0) {
               $distancia = $_GET['dist'];
               $combustivel = $_GET['cons'];

               $consumoMedio = $distancia / $combustivel;

               $total = number_format($consumoMedio, 0, '', '');

               echo "<p>O consumo médio de combustivel foi de <strong>$total litros</strong></p>";
           } else {
               echo "<p>Por favor, preencha todos os campos corretamente.</p>";
           }
        ?>
    </section>
</body>
</html>