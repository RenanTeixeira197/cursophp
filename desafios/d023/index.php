<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 23</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contador Inicio e Fim</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="numero01">Inicio:</label>
            <input type="number" name="valor1" id="iv1" required><br>

            <label for="numero02">Fim:</label>
            <input type="number" name="valor2" id="iv2" required>

             <label for="numero01">Passo:</label>
            <input type="number" name="passo" id="pss1" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
        if (isset($_GET['valor1']) && isset($_GET['valor2']) && isset($_GET['passo'])) {
            $inicio = intval($_GET['valor1']);
            $fim = intval($_GET['valor2']);
            $passo = intval($_GET['passo']);

            if ($passo <= 0) {
                    echo "<p>Passo inválido! Considerando PASSO 1</p>";
                    $passo = 1;
            }

            if($inicio < $fim){
                for($c = $inicio; $c <= $fim; $c += $passo){
                    echo "$c \u{1F449} ";
                }
            }else{
                for ($c = $inicio; $c >= $fim; $c -= $passo) {
                    echo "$c \u{1F449} ";
                }
            }
            echo "Fim";
        } 
        ?>
    </section>
</body>
</html>