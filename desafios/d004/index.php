<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>

    <main>
        <p>Quantos reais você tem na cartera?</p>
        <form method="get">
            <input type="text" name="conversor">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php 
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = @json_decode(@file_get_contents($url), true);

    if (isset($dados["value"][0]["cotacaoCompra"])) {
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        echo "<p>A cotação do dólar hoje é <strong>R$ " . number_format($cotacao, 2, ',', '.') . "</strong></p>";

        if (isset($_GET["conversor"]) && $_GET["conversor"] !== "") {
            $reais = floatval($_GET["conversor"]);
            $dolares = $reais / $cotacao;
            echo "<p>Se você tem <strong>R$ " . number_format($reais, 2, ',', '.') . "</strong>, isso equivale a <strong>US$ " . number_format($dolares, 2, ',', '.') . "</strong></p>";
        }
    } else {
        echo "<p>Não foi possível obter a cotação do dólar. Tente novamente mais tarde.</p>";
    }
    ?>
</body>
</html>