<?php
    $numero = $_POST['num'];
    //echo $numero;
    $cubo = pow($numero,3);
    //echo $cubo;

    //Exemplo para identificar números ímpares
    //$abacaxi = 10;
    //$resto = ($abacaxi % 2);
    //echo $resto;

    for($cont=$numero;$cont<=$cubo;$cont++){
        if($cont % 2 == 1){
            echo $cont. "<br>";
        }  
    }

     



?>