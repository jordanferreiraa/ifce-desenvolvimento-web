<?php
    $sexo = $_POST["sexo"];
    $altura = $_POST["altura"];

    if ($sexo == "h" || $sexo == "homem") {
      $pesoIdeal = ((72.7 * $altura) - 58);
    }else if ($sexo == "m" || $sexo == "mulher") {
      $pesoIdeal = ((62.1 * $altura) - 44.7);
    }

    echo "Peso ideal: ".$pesoIdeal;
          
?>