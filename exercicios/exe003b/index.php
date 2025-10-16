<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos PHP</h1>
    <?php 
        $num = 300;
        echo "O valor da variável é $num <br>";
        
        //0x = Hexadecimal 0b = binário 0 = octal
        
        $basenum = 0x1A;
        echo "O valor da variável é: $basenum <br>";

        $octal = 010;
        echo "O valor da variável é: $octal <br>";

        $v = 300;
        var_dump($v);

        $v2 = 45.2;
        var_dump($v2);

        $bool = true;
        var_dump($bool);

        $string = "PHP";
        echo "O valor é: var_dump($string) <br>";

        $coers = (integer) 3e2; // 3 x 10(2) coerção
        echo "O resultado é: var_dump($coers) <br>";

        $vet = [7, 4, 8, 6, 10];
        var_dump($vet);

        class Pessoa{
            private string $nome;
        }
        
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>