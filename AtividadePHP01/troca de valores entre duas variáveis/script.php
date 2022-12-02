<?php

    $a = $_POST['a'];
    $b = $_POST['b'];

    $antigoA = $a;
    $antigoB = $b;

    $aux = $a;
    $a = $b;
    $b = $aux;
        
    echo"Variável a antes da troca: " .$antigoA;
    echo"<br>";
    echo"Variável b antes da troca: " .$antigoB;
    echo"<br><br>";
    echo"Variável a depois da troca: " .$a;
    echo"<br>";
    echo"Variável b depois da troca: " .$b;
    
?>