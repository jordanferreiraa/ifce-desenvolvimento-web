<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];

  echo "<h2>Crescente: </h2>";
  if($a < $b){
    if($b < $c){
      echo "$a $b $c";
    }else{
      if($a < $c){
        echo "$a $c $b";
      }else{
        echo "$c $a $b";
      }
    }
  }else{
    if($b < $c){
      if($a < $c){
        echo "$b $a $c";
      }else{
        echo "$b $c $a";
      }
    }else{
      echo "$c $b $a";
    }
  }

  echo "<hr>";

  echo "<h2>Decrescente: </h2>";
  if($a > $b){
    if($b > $c){
      echo "$a $b $c";
    }else{
      if($a > $c){
        echo "$a $c $b";
      }else{
        echo "$c $a $b";
      }
    }
  }else{
    if($b > $c){
      if($a > $c){
        echo "$b $a $c";
      }else{
        echo "$b $c $a";
      }
    }else{
      echo "$c $b $a";
    }
  }

?>