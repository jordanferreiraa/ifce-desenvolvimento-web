<?php

  echo "<h2>Matriz:</h2>";

  $min = $_POST['min'];
  $max = $_POST['max'];

  $matriz = array();
  //$matriz[$min][$max];

  for($i=0; $i<$min; $i++){
    for($j=0; $j<$max; $j++){
      $matriz[$i][$j] = rand(0, 1);
    }
  }

  for($i=0; $i<$min; $i++){
    for($j=0; $j<$max; $j++){
      echo $matriz[$i][$j]. "<br>";
    }
  }

  //print_r($matriz);

?>