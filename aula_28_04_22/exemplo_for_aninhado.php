<?php
    $vetor[0][0] = "elemento00"; 
    $vetor[0][1] = "elemento01"; 
    $vetor[1][0] = "elemento10"; 
    $vetor[1][1] = "elemento11"; 
    
    for($contI=0;$contI<2;$contI++){ 
        for($contJ=0;$contJ<2;$contJ++){ 
            echo "O valor do vetor é " . $vetor[$contI][$contJ]; 
            echo "<br>"; 
        } 
    }
?>



