<?php
/* a)  idade = 17, habilitacao = FALSE
b)  idade = 20, habilitacao = FALSE
c)  idade = 18, habilitacao = TRUE
b)  idade = 15, habilitacao = TRUE */

    $idade = 15;
    $habilitacao = TRUE;

    $teste = "";
    if ($habilitacao == TRUE){
        $teste = "SIM";
    }else {
        $teste = "NÃO";
    }

    echo "Sua idade é: $idade <br>";
    echo "Tem habilitação: $teste <br>";
    echo "<br>";

    if ($idade>=18){
        if ($habilitacao == TRUE){
            echo "<b>VOCÊ PODE DIRIGIR</b>";
        }else {
            echo "<b>VOCÊ NÃO PODE DIRIGIR - NÃO TEM HABILITAÇÃO</b>";
        }
    }else {
        if ($habilitacao == TRUE){
            echo "<b>VOCÊ NÃO PODE DIRIGIR - NÃO TEM IDADE APESAR DE TER HABILITAÇÃO</b>";
        }else {
            echo "<b>VOCÊ NÃO PODE DIRIGIR - NÃO TEM IDADE E NEM HABILITAÇÃO</b>";
        }
        
    }
?>