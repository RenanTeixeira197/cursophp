<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Informe o total de segundos:</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado da Conversão</h2>
        <?php 
            $segundos = $_GET['segundos'] ?? 0;
            if ($segundos > 0) {
                $semanas = intdiv($segundos, 604800);
                $segundos %= 604800;
                $dias = intdiv($segundos, 86400);
                $segundos %= 86400;
                $horas = intdiv($segundos, 3600);
                $segundos %= 3600;
                $minutos = intdiv($segundos, 60);
                $segundos %= 60;

                echo "<p>$semanas semana(s), $dias dia(s), $horas hora(s), $minutos minuto(s) e $segundos segundo(s).</p>";
            } else {
                echo "<p>Informe um total de segundos maior que zero para realizar a conversão.</p>";
            }
        ?>
</body>
</html>