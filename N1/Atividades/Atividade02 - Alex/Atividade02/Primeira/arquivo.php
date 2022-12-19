
<?php
$A = $_POST['primeiro'];
$B = $_POST['segundo'];
$C = $_POST['terceiro'];
$numeros=array($A,$B,$C);
if($A==$B && $A==$C){
    echo "Iguais". "<br>";
}else{
    echo 'O maior é ';
    echo max($numeros). '<br>';
    echo 'O menor é ';
    echo min($numeros). "<br>";
}
echo 'Ordem crescente: ';
sort($numeros);
foreach($numeros as $numero){
    echo "$numero ";
}
echo 'Ordem decrescente: ';
rsort($numeros);
foreach($numeros as $numero){
    echo "$numero ";
}
?>
