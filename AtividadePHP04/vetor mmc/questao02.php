<?php
    if($_POST['values']){
        $values = explode(",", $_POST['values']);
        $mdc = [];

        array_push($mdc, gmp_strval(gmp_gcd($values[0], gmp_gcd($values[1], $values[2]))));
        array_push($mdc, gmp_strval(gmp_gcd($values[3], gmp_gcd($values[4], $values[5]))));
        array_push($mdc, gmp_strval(gmp_gcd($values[6], gmp_gcd($values[7], $values[8]))));
        array_push($mdc, gmp_strval(gmp_gcd($values[9], gmp_gcd($values[10], $values[11]))));

        echo "$mdc[0]#$mdc[1]#$mdc[2]#$mdc[3]";
    }
?>