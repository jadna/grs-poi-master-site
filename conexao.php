<?php
    $servidor = "us-cdbr-east-02.cleardb.com";
    $usuario = "b5c0f5a2c5d745";
    $senha = "b87461aa";
    $dbname = "heroku_9fb4d7df6d1110d";    

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){

        die("Falha na conexao: " . mysqli_connect_error());
    }
?> 