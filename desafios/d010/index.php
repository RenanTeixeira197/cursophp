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
        <h1>Reajuste de Preços</h1>
    </header>
    
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">
            <label for="reajuste">Reajuste ( % )</label>
            <input type="number" name="reajuste" id="reajuste" step="0.1" value="<?=$reajuste?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $preco = $_GET['preco'] ?? 0;
            $reajuste = $_GET['reajuste'] ?? 0;
            $valor_reajuste = ($preco * $reajuste) / 100;
            $novo_preco = $preco + $valor_reajuste;
            if ($preco > 0) {
                echo "<p>O produto que custava R$ ".number_format($preco, 2, ',', '.').", com o reajuste de $reajuste% vai passar a custar R$ ".number_format($novo_preco, 2, ',', '.')."</p>";
            } else {
                echo "<p>Informe o preço do produto para calcular o reajuste.</p>";
            }
        ?>
</body>
</html>