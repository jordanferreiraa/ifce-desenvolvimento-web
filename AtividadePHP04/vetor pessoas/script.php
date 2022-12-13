<?php
  $pessoas = array(
    $_POST['1'], $_POST['2'], $_POST['3'], $_POST['4'], $_POST['5'], 
    $_POST['6'], $_POST['7'], $_POST['8'], $_POST['9'], $_POST['10']
  );

  echo "<h2>Cadastro:</h2>";

  $countX = 0;
  
  while($countX < 10){
    echo $pessoas[$countX]. "<br>";
    $countX++;
  }

  //print_r($pessoas);

?>