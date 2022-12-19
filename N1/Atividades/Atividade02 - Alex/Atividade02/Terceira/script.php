<?php
    $nome = $_POST["nome"];
    $Mes = $_POST["mes"];
    $Dia = $_POST["dia"];

    if ($Mes==3 &&  $Dia>=21 && $Mes==4 && $Dia<21)
        echo "Signos do zodíaco: Áries";
     else
          
     if ($Mes==2 && $Dia>=19 || $Mes==3 && $Dia<21)
        echo "Signos do zodíaco: Peixes";
     else
     if ($Mes==1 && $Dia>=21 || $Mes==2 && $Dia<20)
        echo "Signos do zodíaco: Aquário"; 
     else
     if ($Mes==4 && $Dia>=21 || $Mes==5 && $Dia<21)
        echo "Signos do zodíaco: Touro";
     else
     if ($Mes==5 && $Dia>=21 || $Mes==6 && $Dia<21)
        echo "Signos do zodíaco: Gêmeos";
     else
     if ($Mes==6 && $Dia>=21 || $Mes==7 && $Dia<23)
        echo "Signos do zodíaco: cancêr";
     else
     if ($Mes==7 && $Dia>=23 || $Mes==8 && $Dia<23)
     echo "Signos do zodíaco: leão";
     else
     if ($Mes==8 && $Dia>=23 || $Mes==9 && $Dia<23)
     echo "Signos do zodíaco: virgem";
     else
     if ($Mes==9 && $Dia>=23 || $Mes==10 && $Dia<23)
     echo "Signos do zodíaco: libra";
     else
     if ($Mes==10 && $Dia>=23 || $Mes==11 && $Dia<22)
     echo "Signos do zodíaco: escorpião";
     else
     if ($Mes==11 && $Dia>=22 || $Mes==12 && $Dia<22)
     echo "Signos do zodíaco: sagitario";
     else
     if ($Mes==12 && $Dia>=22 || $Mes==1 && $Dia<21)
     echo "Signos do zodíaco: capricornio";
          
?>