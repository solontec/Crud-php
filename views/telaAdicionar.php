<?php 
require_once "../model/conn.php";
require_once "../controller/login.php";

session_start();

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
    <div class="adicionar">
    <form action="../controller/inicial.php" method="POST">
        <input type="text" name="nome" required>
        <input type="text" name="descricao" required>
        <button type="submit">Adicione seu produto</button>
    </form>
</body>
</html>