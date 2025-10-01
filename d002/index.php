<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteador de números aleatórios</h1>
    </header>
    <main>
        <form method="get">
            <!-- campo escondido para identificar a ação -->
            <input type="hidden" name="acao" value="sortear">
            <input type="submit" value="Sortear número entre 0 e 100">
        </form>

        <?php
        if (isset($_GET['acao'])) {
            // random_int é mais seguro que rand
            $numeroSorteado = random_int(0, 100);
            echo "<p>Número sorteado: <strong>$numeroSorteado</strong></p>";
        }
        ?>
    </main>
</body>
</html>
