<?php
    $numero = $_POST['num'];
    //echo $numero;
    $cubo = pow($numero,3);
    //echo $cubo;

    for($cont=$numero;$cont<=$cubo;$cont++){
        echo $cont. "<br>";
        //echo "<br>";
    }
?>