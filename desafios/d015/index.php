<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de IMC</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="altura">Altura(m):</label>
            <input type="number" name="altura" min="0" max="3" step="0.01" placeholder="Ex: 1.50" required>

            <label for="peso">Peso(Kg):</label>
            <input type="number" name="peso" min="1" step="0.01" placeholder="Ex: 80.12" reqired>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Seu IMC:</h2>

        <?php 
           if (isset($_GET['altura']) && ($_GET['peso']) && ($_GET['altura']) !== '' && $_GET['altura'] !== '' && $_GET['peso'] != 0){
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];

            $IMC = $peso / ($altura * $altura);

            $result = number_format($IMC,1,'.');

            echo "Seu IMC é: <strong>$result</strong>";
           } else {
            echo "Preencha os campos acima";
           }
        ?>
    </section>
</body>
</html>