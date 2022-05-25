<?php
       
    function nome($abc){
        $n = $abc;
        return $n;
    }

    $nome = nome('Alguma coisa');
    echo "O nome é: $nome";

    echo "<hr>";

    // reutilizando a mesma função com valor 
    // diferente no parâmetro

    $outro_nome = nome('Aula de SW-I');
    echo "O nome é: $outro_nome";

?>



