<?php
  $valor = $_POST['valor'];
  $formaPagamento = $_POST['formaPagamento'];

  echo "<h2>Novo valor:</h2>";

  if($formaPagamento == 0){
    $desc = $valor * 0.10;
    $novoValor = $valor - $desc;
  }else if($formaPagamento == 1) {
    $desc = $valor * 0.15;
    $novoValor = $valor - $desc;
  }else if($formaPagamento == 2) {
    $novoValor = $valor;
  }else if($formaPagamento == 3) {
    $desc = $valor * 0.10;
    $novoValor = $valor + $desc;
  }

  echo "R$: ".$novoValor;

?>