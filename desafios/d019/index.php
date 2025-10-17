<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 19</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Área (Circunferência)</h1>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="raio">Valor do Raio:</label>
            <input type="number" name="raio" id="iraio" step="0.01" placeholder="Ex: 1000" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php 
            if(isset($_GET['raio'])){
                $raio = $_GET['raio'];
                $area = pi() * ($raio ** 2);
                echo "<p>Área da Circunferência: " . number_format($area, 2, ",", ".") . " m²</p>";
            } else {
                echo "<p class='aviso'>Preencha o formulário acima para ver o resultado.</p>";
            }
        ?>
    </section>
</body>
</html>