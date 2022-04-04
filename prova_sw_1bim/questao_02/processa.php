<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    echo "Você digitou os números nesta ordem: <br>";
    echo "$num1 <br>";
    echo "$num2 <br>";
    echo "$num3 <br>";

    echo "Vamos colocá-los em ordem crescente!<br>";

    if ($num2 < $num1){
        $temporario = $num1;
        $num1 = $num2;
        $num2 = $temporario;
    }

    if ($num3 < $num1){
        $temporario = $num1;
        $num1 = $num3;
        $num3 = $temporario;
    }

    if ($num3 < $num2){
        $temporario = $num2;
        $num2 = $num3;
        $num3 = $temporario;
    }

    echo "$num1 < $num2 < $num3";

?>