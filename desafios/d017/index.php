<?php

$valor = isset($_GET['valor']) ? floatval(str_replace(',', '.', $_GET['valor'])) : null;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 17</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contagem de Parcelas</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="valor">Valor</label>
            <input type="number" name="valor" step="0.01" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Simulação:</h2>
        <?php if ($valor !== null): ?>
        <?php
       
        $total = $valor * 1.08;
        $parcela = $total / 10;

        function fmoney($n){
            return 'R$ ' . number_format($n, 2, ',', '.');
        }

        echo '<div class="result">';
        $parts = [];
        for ($i = 1; $i <= 10; $i++){
            $parts[] = $i . 'ª parcela = ' . fmoney($parcela);
        }
        echo implode(' / ', $parts);
        echo '</div>';
        ?>
    <?php endif; ?>
    </section>
</body>
</html>