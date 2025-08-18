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
        body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 350px;
    transition: transform 0.3s ease-in-out;
}

.login-container:hover {
    transform: translateY(-5px);
}

h1 {
    color: #333;
    margin-bottom: 20px;
    font-weight: 700;
}

form input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

form input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

button:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

p {
    margin-top: 20px;
    color: #666;
    font-size: 14px;
}

p a {
    color: #007bff;
    text-decoration: none;
    font-weight: 700;
    transition: color 0.3s ease;
}

p a:hover {
    color: #0056b3;
    text-decoration: underline;
}

        
    </style>
</body>
</html>




