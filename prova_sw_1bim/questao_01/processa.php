<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01 - Resposta</title>
    <style>
        p{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $idade = 2022 - $ano;    
    ?>
    <p>Olá <?php echo $nome; ?> você tem <?php echo $idade; ?> anos de idade</p>
    
</body>
</html>