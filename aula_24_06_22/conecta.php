<?php
    //Dados de SGBD MySql para conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "teste_mysqli";
    
    //criando a conexão
    $conexao = new mysqli ($servidor, $usuario, $senha, $banco);
    
    //checando a conexão
    if ($conexao->connect_error) {
        die ("conexão falhou: " . $conn->connect_error);
    }
     echo "CONECTADO COM SUCESSO!!! <br>";
?>