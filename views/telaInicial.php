<?php
require_once "../model/conn.php"; 
require_once "../controller/inicial.php";
require_once "../controller/login.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Adicione seus produtos aqui!</h1>

    <div class="adicionar">
    <form action="telaInicial.php" method="POST">
        <input type="text" name="nome" required>
        <input type="text" name="descricao" required>
        <button type="submit">Adicione seu produto</button>
    </form>

    
</div>

</body>
</html>