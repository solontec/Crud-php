<?php 


require_once "../model/conn.php";
require_once "../controller/login.php";

session_start();
session_destroy();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../views/static/telaLogin.css">
</head>
<body>
    
    <div class="login-container">
        <h1>Login</h1>
        <form action="telaLogin.php" method="POST">
            <input type="email" name="email" required>
            <input type="password" name="senha" required>
            <button type="submit">Entrar</button>
            <p>Vá para <a href="../views/telaCadastro.php">Cadastro</a></p>
        </form>  
    </div>

    <style>
        body{
            background-color: pink;
        }

        
    </style>
</body>
</html>




