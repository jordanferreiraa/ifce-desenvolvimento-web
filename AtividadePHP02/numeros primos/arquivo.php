<?php
    $n = $_POST['n1'];
    $divisores = 0;
    
    if($n!=0 && $n!=1){
        for($count=2; $count<$n; $count++)
        if($n % $count == 0){
        echo "Multiplo de $count<br />";
        $divisores++;
        }

        if($divisores)  echo "Não é primo";
        else    echo "É primo!";
    }else{
        if($n==1){
            echo "Não é primo";
        }else{
            echo "Valor nulo";
        }
    }
?>
