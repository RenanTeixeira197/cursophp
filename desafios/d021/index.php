<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 21</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 21</h1>
        <h2>Contagem de Números com intervalo</h2>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="inicio">Início:</label>
            <input type="number" name="inicio" id="inicio" required>
            <br>
            <label for="fim">Fim:</label>
            <input type="number" name="fim" id="fim" required>
            <br>
            <label for="passo">Passo:</label>
            <input type="number" name="passo" id="passo" required>
            <br>
            <input type="submit" value="Contar">
            <?php
                if (isset($_GET['inicio']) && isset($_GET['fim']) && isset($_GET['passo'])) {
                    $inicio = intval($_GET['inicio']);
                    $fim = intval($_GET['fim']);
                    $passo = intval($_GET['passo']);

                    if ($passo <= 0) {
                        echo "<p>Passo inválido! Considerando PASSO 1</p>";
                        $passo = 1;
                    }

                    echo "<h3>Contando:</h3>";
                    if ($inicio < $fim) {
                        // Contagem crescente
                        for ($i = $inicio; $i <= $fim; $i += $passo) {
                            echo "$i \u{1F449} ";
                        }
                    } else {
                        // Contagem decrescente
                        for ($i = $inicio; $i >= $fim; $i -= $passo) {
                            echo "$i \u{1F449} ";
                        }
                    }
                    echo "\u{1F3C1}";
                }
            ?>
        </form>
    </main>
</body>
</html>