<?php
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $sinal = $_POST['operacao'];

    switch($sinal){
        case '+':
            echo "Resultado: ". ($num1+$num2);
            break;
        case '-':
            echo "Resultado: ". ($num1-$num2);
            break;
        case '*':
            echo "Resultado: ". ($num1*$num2);
            break;
        case '/':
            echo "Resultado: ". ($num1/$num2);
            break;
        default:
            echo "Operação Inválida";
    }


?>