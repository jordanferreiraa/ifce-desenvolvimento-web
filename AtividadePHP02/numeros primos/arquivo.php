<?php
    $n = $_POST['n1'];
    $divisores = 0;
    

    if($n > 0){
        for($valor=1; $valor<=$n; $valor++){
            if($n % 2 == 0)
                $divisores++;
                //$valor++;
            //}else{
                //$valor++;
            //}
        }
        if($divisores == 2){
            echo "É primo";
        }else{
            echo "Não é primo";
        }
        echo "<br>";
        echo $divisores;
    }else{
        echo "O valor que você digitou é zero ou menor que zero!!!";
    }




  //$n = $_GET['number'];
  //$divisores = 0;
  
  //for($count=2; $count<$n; $count++)
   //if($n % $count == 0){
    //echo "Multiplo de $count<br />";
    //$divisores++;
   //}
  
  //if($divisores)  echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
  //else    echo "É primo!";

?>
