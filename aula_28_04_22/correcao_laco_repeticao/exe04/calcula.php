<?php
    $numero = $_POST['num'];
    //echo $numero;
    
    $resultado = 1;
    for($cont=$numero;$cont>=1;$cont--){
        $resultado *= $cont;
        echo "contador ==> $cont <br>";
        echo "resultado ==> $resultado <br>";
    }


    echo "O resultado final é: $resultado";
     



?>