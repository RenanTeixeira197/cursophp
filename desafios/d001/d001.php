<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $resultado = $_GET["numero"];
        $antecessor = $resultado - 1;
        $sucessor = $resultado + 1;
        
        echo "O <strong>número digitado</strong> foi: $resultado <br>";
        echo "Seu <strong>antecessor</strong> é $antecessor <br>";
        echo "Seu <strong>sucessor</strong> é: $sucessor";
        ?>
    </main>
    <a href="javascript:history.go(-1)">Voltar para a página inicial</a>
</body>
</html>