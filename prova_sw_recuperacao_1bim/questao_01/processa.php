<?php
    $num = $_POST['numero'];

    if($num == 0){
        echo "IGUAL A ZERO";
    }
    elseif ($num > 0) {
        echo "VALOR POSITIVO";
    }
    else{
        echo "VALOR NEGATIVO";
    }
?>