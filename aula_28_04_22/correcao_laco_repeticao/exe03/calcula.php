<?php
    $numero = $_POST['num'];
    //echo $numero;
    
    for($cont=1;$cont<=10;$cont++){
        $resultado = $numero * $cont;
        echo "$numero * $cont = $resultado<br>";
    }
     



?>