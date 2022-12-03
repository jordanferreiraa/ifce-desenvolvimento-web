<?php
    
        $total = 0;
        for ($i = $_POST['inicio']; $i <= $_POST['fim']; $i++) {

            $divisores = 0;

            for ($j = $i; $j >= 1; $j--) {
                if (($i % $j) == 0) {
                    $divisores++;
                }
            }

            if ($divisores == 2) {
                echo $i . ', ';
                $total += 1;
            }
        }
        if ($total == 0) {
            echo 'ERRO! ';
        }
        echo 'Total de números primos: ' . $total
    
?>
