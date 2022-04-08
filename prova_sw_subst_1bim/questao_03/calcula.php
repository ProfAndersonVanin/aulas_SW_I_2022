<?php
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];

    if($sexo == "masc"){
        $peso_ideal = ((72.7*$altura)-58);
        echo "
            <fieldset>
                <legend>CÁLCULO DE PESO IDEAL</legend>
                <p>VOCÊ É DO SEXO: $sexo E MEDE $altura metros PORTANTO SEU PESO IDEAL É: </p>
                <p style='color:blue;'>PESO IDEAL: $peso_ideal Kg</p>
            </fieldset>
        ";
    }else{
        $peso_ideal = ((62.1*$altura)-44.7);
        echo "
            <fieldset>
                <legend>CÁLCULO DE PESO IDEAL</legend>
                <p>VOCÊ É DO SEXO: $sexo E MEDE $altura metros PORTANTO SEU PESO IDEAL É: </p>
                <p style='color:red;'>PESO IDEAL: $peso_ideal Kg</p>
            </fieldset>
        ";
    }

    
?>