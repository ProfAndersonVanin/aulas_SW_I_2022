<?php
    $nota = 5.5;
    //APROVADO SE NOTA >6 - OK
    //REPROVADO SE NOTA <5
    //RECUPERAÇÃO SE NOTA ENTRE 5 E 6
    
    if ($nota>6){
        echo "APROVADO";
    }
    elseif ($nota<5) {
        echo "REPROVADO";
    }
    else{
        echo "RECUPERAÇÃO";
    }
    
?>