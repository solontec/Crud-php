<?php
require_once "../model/conn.php";
include "../controller/cadastro.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cadastrar">
        <form action="telaCadastro.php" method="POST">
        <input type="text" name="email" required>
        <input type="text" name="senha" required>
        <button type="submit">Cadastrar</button>
    </form>
    
    </div>
</body>
</html>