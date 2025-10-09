<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <header>
        <h1>Anatomia de uma Divisão</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Analisando os valores que você digitou, temos:</p>
        <ul>
            <li>Dividendo: <?=$dividendo?></li>
            <li>Divisor: <?=$divisor?></li>
            <li>Quociente: <?=$quociente?></li>
            <li>Resto: <?=$resto?></li>
        </ul>
        <p>Portanto, <strong><?=$dividendo?> = <?=$divisor?> x <?=$quociente?> + <?=$resto?></strong></p>
</body>
</html>