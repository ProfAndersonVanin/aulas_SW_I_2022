<?php
    $n1 = 10;
    $n2 = 20;
    
    function soma($a,$b){
        $soma = $a + $b;
        echo "A soma é $soma";
    }

    soma($n1,$n2);
    // a operação abaixo resulta um erro, 
    // pois $soma está dentro da função!
    echo $soma; 
?>



