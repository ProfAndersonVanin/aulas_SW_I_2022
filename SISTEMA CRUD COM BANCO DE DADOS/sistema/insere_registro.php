<?php
    // Incluir o arquivo de conexão sempre que precisar acessar o SGBD
    include 'conecta.php';

    // SQL para inserir um registro
    $sql = "INSERT INTO alunos (nome, curso, idade)
    VALUES ('OUTRO REGISTRO', 'MEDICINA', '52')";

    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro criado com sucesso";
    } 
    else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
    
    // Fechar a conexão
    mysqli_close($conexao);

?>





