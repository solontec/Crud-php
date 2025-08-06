<?php 

require_once "../model/conn.php";
include "../controller/login.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <form action="telaLogin.php" method="POST">
            <input type="email" name="iEmail" required>
            <input type="password" name="iSenha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>




