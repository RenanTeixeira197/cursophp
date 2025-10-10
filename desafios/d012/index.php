<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 12</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Caixa Eletrônico</h1>
        </header>

        <main>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="valor">Informe o valor do saque (R$):</label>
                <input type="number" name="valor" id="valor" value="<?=$valor?>">
                <input type="submit" value="Sacar">
            </form>
        </main>

        <section>
            <h2>Notas Entregues</h2>
            <?php 
                $valor = $_GET['valor'] ?? 0;
                if ($valor > 0) {
                    $notas = [100, 50, 20, 10, 5, 2, 1];
                    $resultado = [];
                    foreach ($notas as $nota) {
                        if ($valor >= $nota) {
                            $quantidade = intdiv($valor, $nota);
                            $valor %= $nota;
                            $resultado[$nota] = $quantidade;
                        }
                    }
                    echo "<ul>";
                    foreach ($resultado as $nota => $quantidade) {
                        echo "<li>$quantidade nota(s) de R$ $nota</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Informe um valor maior que zero para realizar o saque.</p>";
                }
            ?>
        </section>