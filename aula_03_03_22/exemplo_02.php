<?php
    $soma = ($valor1 = 4) + 5;
    $valor2 = 20;
    $valor3 = 30;
    $soma += 1;

    $soma += $valor2;
    $soma *= $valor3;
    $soma %= 100;

    $saudacao = "Bom ";
    $saudacao .= "Dia!"; 
    $saudacao = $saudacao . "Dia!";
    echo $saudacao . "Hoje vai ter " . $soma . " % tristeza!";


?>