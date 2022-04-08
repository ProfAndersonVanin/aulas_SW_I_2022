<?php
    $livro = $_POST['livro'];
    $usuario = $_POST['usuario'];

    if($usuario == "professor"){
        echo "
            <fieldset>
                <legend>RECIBO DE EMPRÉTIMO</legend>
                <p>CARO PROFESSOR, VOCÊ TEM 10 DIAS PARA FAZER A DEVOLUÇÃO</p>
                <p>Livro: $livro</p>
            </fieldset>        
        ";
    }else{
        echo "
            <fieldset>
                <legend>RECIBO DE EMPRÉTIMO</legend>
                <p>CARO ALUNO, VOCÊ TEM 3 DIAS PARA FAZER A DEVOLUÇÃO</p>
                <p>Livro: $livro</p>
            </fieldset>        
        ";
    }
?>