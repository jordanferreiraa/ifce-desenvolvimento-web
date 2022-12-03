<?php
    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $Mes = $_POST["mes"];
    $Dia = $_POST["dia"];

    if ($Mes==1 &&  $Dia>=20 && $Mes==2 && $Dia<19)
        echo "Signos do zodíaco ocidental: aquarios";
     else
          
     if ($Mes==2 && $Dia>=18 || $Mes==3 && $Dia<20)
        echo "Signos do zodíaco ocidental: peixes";
     else
     if ($Mes==3 && $Dia>=19 || $Mes==4 && $Dia<21)
        echo "Signos do zodíaco ocidental: áries"; 
     else
     if ($Mes==4 && $Dia>=20 || $Mes==5 && $Dia<21)
        echo "Signos do zodíaco ocidental: touro";
     else
     if ($Mes==5 && $Dia>=20 || $Mes==6 && $Dia<21)
        echo "Signos do zodíaco ocidental: gêmeos";
     else
     if ($Mes==6 && $Dia>=20 || $Mes==7 && $Dia<22)
        echo "Signos do zodíaco ocidental: cancêr";
     else
     if ($Mes==7 && $Dia>=21 || $Mes==8 && $Dia<23)
     echo "Signos do zodíaco ocidental: leão";
     else
     if ($Mes==8 && $Dia>=22 || $Mes==9 && $Dia<23)
     echo "Signos do zodíaco ocidental: virgem";
     else
     if ($Mes==9 && $Dia>=22 || $Mes==10 && $Dia<23)
     echo "Signos do zodíaco ocidental: libra";
     else
     if ($Mes==10 && $Dia>=22 || $Mes==11 && $Dia<22)
     echo "Signos do zodíaco ocidental: escorpião";
     else
     if ($Mes==11 && $Dia>=21 || $Mes==12 && $Dia<22)
     echo "Signos do zodíaco ocidental: sagitario";
     else
     if ($Mes==12 && $Dia>=21 || $Mes==1 && $Dia<22)
     echo "Signos do zodíaco ocidental: capricornio";
          
?>