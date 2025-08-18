<?php

require_once "../model/conn.php";
include "../controller/redefinirSenha.php";


if(!isset($_SESSION['usuario'])){
    echo "<script> alert('você não pode acessar essa pagina sem logar')</script>";
    echo "<script> window.location.href = 'telaLogin.php'</script>"; 
    // utilizando script dentro de echo para redirecionar e respeitar header com echo
    // sempre usar aspas simples para definir caminhos 
} 

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