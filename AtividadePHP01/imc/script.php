<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    function imc($altura, $peso){

        $result = (($altura * $altura) / $peso);

        return $result;
    }
        
    echo"Seu imc é: " .imc($altura , $peso);
    
?>