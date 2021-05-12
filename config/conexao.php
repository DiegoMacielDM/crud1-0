<?php

    $localhost = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso";

    try {
        //conexão com o banco de dados
        $conexao = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
       

    } catch (PDOException $e) {
        //caso de erro na conexão
        echo "Falha ao tenhar acessar o banco de dados " . $e->getMessage();
        
    }

    


?>