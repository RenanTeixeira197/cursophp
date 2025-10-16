<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 18</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Desafio 18</h1>
    </header>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="numero01">Digite um valor:</label>
            <input type="number" name="numero01" required><br>
            <label for="numero02"></label><br>
            <input type="number" name="numero02" required>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php
        if (isset($_GET['numero01']) && isset($_GET['numero02'])) {
            $valor01 = $_GET['numero01'];
            $valor02 = $_GET['numero02'];

            if ($valor01 > $valor02) {
                echo "O valor $valor01 é maior que o $valor02";
            } elseif ($valor01 < $valor02) {
                echo "O valor $valor01 é menor que o $valor02";
            } elseif ($valor01 == $valor02) {
                echo "Os valores são iguais.";
            }
        } else {
            echo "Por favor, digite os dois valores!";
        }
        ?>

    </section>
</body>

</html>