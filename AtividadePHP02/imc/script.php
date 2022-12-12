<?php
    $A = $_POST['peso'];
    $B = $_POST['altura'];
    $IMC = $A/(($B*$B)/10000);
    $Resultado = number_format($IMC, 2, '.', '');
    if($Resultado<18.5){
        $situacao='Magreza';
    }else if($Resultado>=18.5 && $Resultado<=24.9){
        $situacao='Saudável';
    }else if($Resultado>=25 && $Resultado<=29.9){
        $situacao='Sobrepeso';
    }else if($Resultado>=30 && $Resultado<=34.9){
        $situacao='Obesidade Grau I';
    }else if($Resultado>=35 && $Resultado<=39.9){
        $situacao='Obesidade Grau II';
    }else if($Resultado>=40){
        $situacao='Obesidade Grau III';
    }
    echo "O valor do seu IMC é $Resultado e sua situação é $situacao";

    /*
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    function imc($altura, $peso){

        $result = (($altura * $altura) / $peso);

        return $result;
    }
        
    echo"Seu imc é: " .imc($altura , $peso);
    */
    
?>