<?php
    $num=$_POST['numero'];

    $result = $num == 0 ? "Nulo" :
    $result = $num > 0 ? "Positivo" : "Negativo";
    
    echo $result;
 ?>
