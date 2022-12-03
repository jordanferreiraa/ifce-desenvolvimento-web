<?php
    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $Mes = $_POST["mes"];
    $Dia = $_POST["dia"];

    if($ano == 1924 || $ano == 1936 || $ano == 1948 || $ano == 1960 || $ano == 1972 || $ano == 1984 || $ano == 1996 || $ano == 2008 || $ano == 2020){
        echo "Signo do zodíaco chinês: Rato";
    }else if($ano == 1925 || $ano == 1937 || $ano == 1949 || $ano == 1961 || $ano == 1973 || $ano == 1985 || $ano == 1997 || $ano == 2009 || $ano == 2021){
        echo "Signo do zodíaco chinês: Boi";
    }else if($ano == 1926 || $ano == 1938 || $ano == 1950 || $ano == 1962 || $ano == 1974 || $ano == 1986 || $ano == 1998 || $ano == 2010 || $ano == 2022){
        echo "Signo do zodíaco chinês: Tigre";
    }else if($ano == 1927 || $ano == 1939 || $ano == 1951 || $ano == 1963 || $ano == 1975 || $ano == 1987 || $ano == 1999 || $ano == 2011 || $ano == 2023){
        echo "Signo do zodíaco chinês: Coelho";
    }else if($ano == 1928 || $ano == 1940 || $ano == 1952 || $ano == 1964 || $ano == 1976 || $ano == 1988 || $ano == 2000 || $ano == 2012 || $ano == 2024){
        echo "Signo do zodíaco chinês: Dragão";
    }else if($ano == 1929 || $ano == 1941 || $ano == 1953 || $ano == 1965 || $ano == 1977 || $ano == 1989 || $ano == 2001 || $ano == 2013 || $ano == 2025){
        echo "Signo do zodíaco chinês: Cobra";
    }else if($ano == 1930 || $ano == 1942 || $ano == 1954 || $ano == 1966 || $ano == 1978 || $ano == 1990 || $ano == 2002 || $ano == 2014 || $ano == 2026){
        echo "Signo do zodíaco chinês: Cavalo";
    }else if($ano == 1931 || $ano == 1943 || $ano == 1955 || $ano == 1967 || $ano == 1979 || $ano == 1991 || $ano == 2003 || $ano == 2015 || $ano == 2027){
        echo "Signo do zodíaco chinês: Carneiro";
    }else if($ano == 1932 || $ano == 1944 || $ano == 1956 || $ano == 1968 || $ano == 1980 || $ano == 1992 || $ano == 2004 || $ano == 2016 || $ano == 2028){
        echo "Signo do zodíaco chinês: Macaco";
    }else if($ano == 1933 || $ano == 1945 || $ano == 1957 || $ano == 1969 || $ano == 1981 || $ano == 1993 || $ano == 2005 || $ano == 2017 || $ano == 2029){
        echo "Signo do zodíaco chinês: Galo";
    }else if($ano == 1934 || $ano == 1946 || $ano == 1958 || $ano == 1970 || $ano == 1982 || $ano == 1994 || $ano == 2006 || $ano == 2018 || $ano == 2030){
        echo "Signo do zodíaco chinês: Cão";
    }else if($ano == 1935 || $ano == 1947 || $ano == 1959 || $ano == 1971 || $ano == 1983 || $ano == 1995 || $ano == 2007 || $ano == 2019 || $ano == 2031){
        echo "Signo do zodíaco chinês: Porco";
    }

    echo "<br>";

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