<?php
  $nome = $_POST['nome'];
  $disciplina = $_POST['disciplina'];
  $carga = $_POST['carga'];
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];
  $faltas = $_POST['faltas'];

  $media = ($n1 + $n2 + $n3) / 3;

  $percentualFaltas = $faltas / $carga; 

  echo "Nome: ".$nome;
  echo "<br>";
  echo "Disciplina: ".$disciplina;
  echo "<br>";
  echo "Média: ".$media;
  echo "<br><hr>";

  $limiteFaltas = $carga * 0.25; 

  if($media >=7 && $media <= 10){
    echo "Aprovado por média!";
  }else{
    echo "Reprovado por média!";
  }

  echo "<br><hr>";

  if($faltas > $limiteFaltas){
    echo "Reprovado por falta!";
  }else if($faltas <= $limiteFaltas){
    echo "Aprovado por presença!";
  }

?>