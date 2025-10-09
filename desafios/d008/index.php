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
        <h1>Desafio 9 – Médias Aritméticas</h1>
        <p>Realiza o cálculo da média simples e da média ponderada de duas notas com pesos distintos, reforçando a lógica matemática envolvida;</p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" step="any" required>
            <label for="peso1">Peso 1:</label>
            <input type="number" name="peso1" id="peso1" step="any" required>
            <br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" step="any" required>
            <label for="peso2">Peso 2:</label>
            <input type="number" name="peso2" id="peso2" step="any" required>
            <br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nota1 = $_POST['nota1'];
                $peso1 = $_POST['peso1'];
                $nota2 = $_POST['nota2'];
                $peso2 = $_POST['peso2'];

                // Cálculo da média simples
                $media_simples = ($nota1 + $nota2) / 2;

                // Cálculo da média ponderada
                $media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);

                echo "<h2>Resultados:</h2>";
                echo "<p>Média Simples: " . number_format($media_simples, 2) . "</p>";
                echo "<p>Média Ponderada: " . number_format($media_ponderada, 2) . "</p>";
            }
        ?>
</body>
</html>