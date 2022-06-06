<?php
    // Incluir o arquivo de conexão sempre que precisar acessar o SGBD
    include 'conecta.php';

    // SQL para apagar um registro
    $sql = "DELETE FROM alunos WHERE id=3";

    if (mysqli_query($conexao, $sql)) {
        echo "Registro apagado com successo";
    } 
    else {
        echo "Erro na remoção do registro: " . mysqli_error($conexao);
    }
    
    // Fechar a conexão
    mysqli_close($conexao);

?>





