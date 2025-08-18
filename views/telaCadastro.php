<?php
require_once "../model/conn.php";
include "../controller/cadastro.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
    <link rel="stylesheet" href="../views/static/telaCadastro.css">
</head>
<body>
   
    <div class="cadastrar">
        
        <h3>Cadastre-se</h3>
        <form action="telaCadastro.php" method="POST">
        <input type="text" name="email" required>
        <input type="text" name="senha" required>
        <button type="submit">Cadastrar</button>
        <p>Vá para <a href="../views/telaLogin.php">Login</a></p>
    </form>
    </div>  


    <style>
        body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f2f5;
    /* Adicione estas 3 linhas para centralizar o conteúdo */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

        .cadastrar {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 350px;
    transition: transform 0.3s ease-in-out;
}

.cadastrar:hover {
    transform: translateY(-5px);
}

.cadastrar h1 {
    color: #004d98; /* Azul escuro, referência ao Real Madrid */
    margin-bottom: 5px;
    font-weight: 700;
}

.cadastrar h3 {
    color: #444;
    margin-bottom: 20px;
}

.cadastrar form input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.cadastrar form input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.cadastrar button {
    width: 100%;
    padding: 12px;
    background-color: #004d98; /* Azul escuro do Real Madrid */
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.cadastrar button:hover {
    background-color: #003366;
    transform: translateY(-2px);
}

.cadastrar p {
    margin-top: 20px;
    color: #666;
    font-size: 14px;
}

.cadastrar p a {
    color: #007bff;
    text-decoration: none;
    font-weight: 700;
    transition: color 0.3s ease;
}

.cadastrar p a:hover {
    color: #0056b3;
    text-decoration: underline;
}

    </style>
</body>
</html>