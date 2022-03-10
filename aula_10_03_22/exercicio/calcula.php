<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Resultado</title>
</head>
<body>
    <!--Aqui pegamos os valores do formulário e fazemos as operações necessárias (não obrigatório fazer nesta parte) -->
    <?php
        $nome = $_POST['nome']; //recebe valor do formulario que tem o input name='nome'
        $nota1 = $_POST['nota1']; //recebe valor do formulario que tem o input name='nota1'
        $nota2 = $_POST['nota2']; //recebe valor do formulario que tem o input name='nota2'
        $nota3 = $_POST['nota3']; //recebe valor do formulario que tem o input name='nota3'
        $media = ($nota1+$nota2+$nota3)/3; //faz o cálculo da média
    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
        <!--neste ponto parar o html, abre php, exibe o resultado, fecha php e continua o html -->    
        Olá <?php echo $nome; ?>
        </div>
        <div class="alert alert-warning" role="alert">
        A sua média de nota é: <?php echo $media; ?>
        </div>        
    </div>
</body>
</html>