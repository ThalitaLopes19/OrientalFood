<?php 
    
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '1234';
    $dbName = 'orientalFood';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    
    else
    {
        include('sucesso.php');
        
    }

    ?>