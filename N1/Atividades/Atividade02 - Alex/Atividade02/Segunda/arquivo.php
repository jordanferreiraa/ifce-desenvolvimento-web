
<?php
$A = $_POST['numero'];
if($A%2==0){
    echo "É par". "<br>";
}else{
    echo 'É impar'. "<br>";
}
echo "Maior = ". $A+1 ." Menor = ". $A-1;
?>