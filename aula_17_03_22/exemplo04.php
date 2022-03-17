<?php
/*
switch (operador){
    case valor1:
        <comandos>
        break;
    case valor2:
        <comandos>
        break;
    case valorN:
        <comandos>
        break;
    default:
        <comandos>
        break;
}
*/

$sigla = "SP";
switch ($sigla){    // idade>15 não dá pra fazer com Switch
    case "SP":
        echo "Você escolheu São Paulo";
        break;
    case "RJ":
        echo "Você escolheu Rio de Janeiro";
        break;
    case "MG":
        echo "Você escolheu Minas Gerais";
        break;
    default:
        echo "NÃO ENCONTREI A SIGLA EM MINHA BASE DE DADOS!";
        break;
}


?>