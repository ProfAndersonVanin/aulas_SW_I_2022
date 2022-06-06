<?php
    // Incluir o arquivo de conexão sempre que precisar acessar o SGBD
    include 'conecta.php';

    // consulta em SQL que será executada na base de dados
    $sql = "SELECT * FROM alunos";

    // armazena o resultado da consulta
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
    // saída de dados de cada linha da tabela
    while($linha = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $linha["id"]. "<br>";
        echo "Nome: " . $linha["nome"]. "<br>";
        echo "Curso: " . $linha["curso"]. "<br>";
        echo "Idade: " . $linha["idade"]. "<br>";       
        
    }
    } else {
        echo "0 resultados";
    }

    // Fechar a conexão
    mysqli_close($conexao);

?>





