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
        <h1>Halla Madrid!</h1>
        <h3>Cadastre-se</h3>
        <form action="telaCadastro.php" method="POST">
        <input type="text" name="email" required>
        <input type="text" name="senha" required>
        <button type="submit">Cadastrar</button>
        <p>Vá para <a href="#">Login</a></p>
    </form>
    </div>  
</body>
</html>