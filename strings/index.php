<?php 
    echo "Manipulando Strings em PHP <br><br>";
    
    $nome = "Silvia";
    $snome = "Teixeira";

    echo "$nome \"Lobo\" $snome ---> Sequência de escape <br><br>"; //Sequência de Escape

    const ESTADO = "SP";

    echo "Moro no ESTADO ---> Constantes não fazem interpolação <br><br>";
    echo "Moro em " . ESTADO . " ---> ultiliza-se concatenação <br><br>";

    echo "Sintaxe Heredoc:";

    $curso = "PHP";
    $ano = date('Y');
    echo <<< FRASE
          Olá, Mundo! \u{1F30E}
          Estou estudando $curso
          em $ano! <br><br>
    FRASE;

    echo "Sintaxe Nowdoc:";

    $Ncurso = "PHP";
    $Nano = date('Y');
    echo <<< 'FRASE'
          Olá, Mundo! \u{1F30E}
          Estou estudando $Ncurso
          em $Nano!
    FRASE;
         
?>