<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       $ano_nascimento = $_POST['ano_nascimento'] ?? null;
       $ano_consulta = $_POST['ano_consulta'] ?? date('Y');
       $idade = null;
       if ($ano_nascimento !== null) {
        $idade = $ano_consulta - $ano_nascimento;
     }
    ?>
    <form method="post">
        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required>
        <br>
        <label for="ano_consulta">Ano para Consulta (opcional):</label>
        <input type="number" id="ano_consulta" name="ano_consulta">
        <br>
        <button type="submit">Calcular Idade</button>
    </form>

    <?php if ($idade !== null): ?>
        <h2>Idade: <?php echo htmlspecialchars($idade); ?> anos</h2>
    <?php endif; ?>
    <section>
        <a href="../">Voltar</a>
    </section>
</body>
</html>