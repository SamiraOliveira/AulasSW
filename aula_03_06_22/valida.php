<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = 'samira';
$pass = 'helloworld';

if(($usuario == $user )&& ($senha == $pass)){
   // echo "OK usuario validado";
   session_start();
   $_SESSION['nome'] = $usuario;
   $_SESSION['logado'] = 1;

    header("Location: restrita.php");
}
else{
    echo"Usuário ou senha incorreto(s)";
}
?>