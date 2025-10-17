<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 20</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Descontos 8% e 11%</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="preco">Preço do Produto:</label>
            <input type="number" name="preco" id="ipreco" step="0.01" placeholder="Ex: 1000" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php 
            if(isset($_GET['preco'])){
                $preco = $_GET['preco'];
                $desconto1 = $preco * 0.08;
                $desconto2 = $preco * 0.11;
                $precofinal1 = $preco - $desconto1;
                $precofinal2 = $preco - $desconto2;
                echo "<h2>Resultados para o preço R$ ".number_format($preco, 2, ',', '.')."</h2>";
                echo "<p>Com 8% de desconto: R$ ".number_format($precofinal1, 2, ',', '.')."</p>";
                echo "<p>Com 11% de desconto: R$ ".number_format($precofinal2, 2, ',', '.')."</p>";
            }
        ?>
    </section>
</body>
</html>