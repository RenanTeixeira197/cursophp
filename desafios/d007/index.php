<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 8 – Raízes de um Número</h1>
        <p>Calcula e exibe a raiz quadrada e a raiz cúbica de um número, com exemplos de resultados exatos e decimais;</p>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="number">Digite um número:</label>
            <input type="number" name="number" id="number" step="any" required>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['number'];
                $sqrt = sqrt($number);
                $cbrt = pow($number, 1/3);
                echo "<h2>Resultados para o número $number:</h2>";
                echo "<p>Raiz Quadrada: " . number_format($sqrt, 2) . "</p>";
                echo "<p>Raiz Cúbica: " . number_format($cbrt, 2) . "</p>";
            }
        ?>
    </header>
</body>
</html>