<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $salariominimo = 1518;
        $salarios = intdiv($salario, $salariominimo);
        $resto = $salario % $salariominimo;
    ?>
    <header>
        <h1>Salario Minimo</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salario</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Considerando o salário mínimo de R$ <?=$salariominimo?>,00, um salário de R$ <?=$salario?>,00 corresponde a:</p>
        <ul>
            <li><?=$salarios?> salários mínimos</li>
            <li>R$ <?=$resto?>,00 reais de sobra</li>
        </ul>
    </section>
</body>
</html>