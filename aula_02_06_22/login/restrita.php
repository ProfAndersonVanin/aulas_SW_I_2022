<?php
    session_start();
    if($_SESSION['logado'] != 1){
        header("Location: index.html");
    }
    
    echo "VOCÊ ESTÁ EM UMA PÁGINA RESTRITA!";
    echo "<a href='logout.php'>SAIR</a>"; 
?>

