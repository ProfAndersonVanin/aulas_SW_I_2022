<?php

    $vetor = [1,5,8,100,2];
       
    function mostra_pares($entrada){
        for($i=0;$i<count($entrada);$i++){
            if ($entrada[$i]%2 == 0){
                echo "<p>$entrada[$i] </p>";
            }
        }
    }

    mostra_pares($vetor);
?>



