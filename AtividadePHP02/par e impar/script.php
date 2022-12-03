<?php
  $a = $_POST['a'];

  echo "<h2>Par ou Ímpar:</h2>";

  if($a % 2 == 0){
    echo "O número que você digitou é par";
  }else {
    echo "O número que você digitou é ímpar";
  }

?>