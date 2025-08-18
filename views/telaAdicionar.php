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
    <title>Adicionar produtos na sua loja</title>
</head>
<body>
    <div class="adicionar">
        <h1>Adicionar produtos  </h1>
    <form action="../controller/inicial.php" method="POST">
        <input type="text" name="nome" required>
        <input type="text" name="descricao" required>
        <input type="file" name="arquivo">
        <button type="submit">Adicione seu produto</button>
    </form>


    <style>
        /*
 * Seção para a tela de adicionar produto
 * Adicionada ao mesmo arquivo style.css
 */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f0f2f5;
    /* Essas 3 linhas centralizam a caixa (card) na tela */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.adicionar {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
    transition: transform 0.3s ease-in-out;
}

.adicionar:hover {
    transform: translateY(-5px);
}

.adicionar form input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.adicionar form input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.adicionar button {
    width: 100%;
    padding: 12px;
    background-color: #28a745; /* Cor verde para indicar ação positiva */
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.adicionar button:hover {
    background-color: #218838;
    transform: translateY(-2px);
}
    </style>
</body>
</html>