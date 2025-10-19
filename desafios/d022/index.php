<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 22</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor Celsius/Fahrenheit</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="temperatura">Temperatura em Celsius</label>
            <input type="number" name="temperatura" required>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h1>Resultado</h1>
            <?php
            // Verifica se o parâmetro foi enviado
            if (isset($_GET['temperatura'])) {
                $input = $_GET['temperatura'];

                // Substitui vírgula por ponto para aceitar formatos como "37,5"
                $input = str_replace(',', '.', $input);

                // Valida se é numérico
                if (is_numeric($input)) {
                    // Sanitiza e converte para float
                    $grausCelsius = (float) $input;

                    // Função que encapsula a conversão
                    function celsiusParaFahrenheit(float $celsius): float {
                        return (9 * $celsius + 160) / 5;
                    }

                    $conversor = celsiusParaFahrenheit($grausCelsius);

                    // Formata o número com 2 casas decimais e vírgula como separador decimal
                    $grausFmt = number_format($grausCelsius, 2, ',', '.');
                    $convFmt = number_format($conversor, 2, ',', '.');

                    echo "A temperatura $grausFmt °C equivale a $convFmt °F";
                } else {
                    echo "Por favor insira um valor numérico para a temperatura.";
                }
            } else {
                echo "Nenhuma temperatura informada.";
            }

            ?>
    </section>
</body>
</html>