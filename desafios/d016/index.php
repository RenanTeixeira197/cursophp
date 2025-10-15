<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 16</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Média</h1>
        <p>Situação do Aluno APROVADO ou REPROVADO</p>
    </header>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="nota01">Primeira Nota:</label>
            <input type="number" name="nota01" step="0.01" required>
            <label for="nota02">Segunda Nota:</label>
            <input type="number" name="nota02" step="0.01" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
        if (isset($_GET['nota01']) && isset($_GET['nota02']) && $_GET['nota01'] !== '' && $_GET['nota02'] !== '') {
            $nota01 = floatval($_GET['nota01']);
            $nota02 = floatval($_GET['nota02']);

            $media = ($nota01 + $nota02) / 2;

            echo '<p>Nota 1: <strong>' . number_format($nota01, 2, ',', '.') . '</strong></p>';
            echo '<p>Nota 2: <strong>' . number_format($nota02, 2, ',', '.') . '</strong></p>';
            echo '<p>Média: <strong>' . number_format($media, 2, ',', '.') . '</strong></p>';

            if ($media >= 7) {
                echo '<p style="color: #4de68fff; font-weight:700">Aluno Aprovado!</p>';
            } else {
                echo '<p style="color: #B22222; font-weight:700">Aluno Reprovado</p>';
            }
        } else {
            echo '<p>Por favor, informe as duas notas do aluno.</p>';
        }

        ?>
    </section>
</body>
</html>