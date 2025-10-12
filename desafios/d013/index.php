<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
</head>
<body>
    <header>
        <h1>Simulador de Parcelas</h1>
        <link rel="stylesheet" href="style.css">
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço_produto">Valor do Produto</label>
            <input type="number" name="valorProduto" id="iValorProduto" placeholder="Valor R$">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Simulação</h2>
        <?php 
        $precoProduto = $_GET['valorProduto'];
        
        $acres = $precoProduto + ( $precoProduto * 0.16);
        $parcelas = $acres / 10;

        echo "<p>O produto com valor acrescido de 16% será de <strong>$acres</strong> <br></p>";
        echo "<p>O valor de cada parcela será de R$: <strong>$parcelas</strong></p>";
        ?>
    </section>
</body>
</html>