<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Simulador de Parcelas</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="iValorProduto">Valor do Produto</label>
            <input type="number" name="valorProduto" id="iValorProduto" placeholder="Valor R$" step="0.01" min="0" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Simulação</h2>
        <?php 
        if (isset($_GET['valorProduto']) && $_GET['valorProduto'] !== "") {
            $precoProduto = floatval($_GET['valorProduto']);
            $acres = $precoProduto * 1.16;
            $parcelas = $acres / 10;

            echo "<p>O produto com valor acrescido de 16% será de <strong>R$ " . number_format($acres, 2, ',', '.') . "</strong></p>";
            echo "<p>O valor de cada parcela será de <strong>R$ " . number_format($parcelas, 2, ',', '.') . "</strong></p>";
        } else {
            echo "<p>Preencha o valor do produto para simular.</p>";
        }
        ?>
    </section>
</body>
</html>