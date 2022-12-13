<?php
  $animais = array(
    array($_POST['animal1'], $_POST['animal2']),
    array($_POST['animal3'], $_POST['animal4'])
  );

  echo "<h2>ANIMAIS:</h2>";

  $countX = 0;
  
  while($countX < 2){
    $countY = 0;
    while($countY < 2){
      echo $animais[$countX][$countY]. "<br>";
        $countY++;
    }
    $countX++;
  }

  //print_r($animais);

?>