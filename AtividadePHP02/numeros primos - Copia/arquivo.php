<?php

    $n1 = $_POST['n1'];
    $divisores = 0;
    
    for($valor=1; $valor<=$n1; $valor++){
        if($n1 % 2 == 0){
            $divisores++;
        }
    }
    if($divisores == 2){
        echo "é primo";
    }else{
        echo "não é primo";
    }

?>
