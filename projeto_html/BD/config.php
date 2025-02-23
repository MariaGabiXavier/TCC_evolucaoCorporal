<?php
     
     $dbHost="localhost";
     $dbUsername="root";
     $dbPassword="senha";
     $dbName = "form_tcc2023";
    
     
    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword,$dbName);

    if($conexao -> connect_errno){
        echo"erro";
    }
    else{
        echo"Conexão efetuada com sucesso";
    }

?>