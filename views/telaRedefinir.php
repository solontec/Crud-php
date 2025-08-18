<?php

require_once "../model/conn.php";
include "../controller/redefinirSenha.php";


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="redefinir">

    <form action="../controller/redefinirSenha.php" method="POST">
        <input type="email" name="emailNovo" required>
        <input type="text" name="senhaNova" required>
        
        <button type="submit"></button>
    </form>

    </div>
</body>
</html>