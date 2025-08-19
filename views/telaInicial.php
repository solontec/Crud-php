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

$exibirProdutos = "SELECT id, nome, descricao FROM produtos";
$stmt = $db->prepare($exibirProdutos);


$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
   
    <a href="telaLogin.php">Deslogar</a>
    <p>Não possui produtos ainda? Adicione aqui na sua loja!</p>

    <a href="telaAdicionar.php">Adicione seus produtos</a>

     <h1>Meus produtos</h1>
     <div class="mostrar">
    <?php

     if($result->num_rows > 0)  { // usar o num rows para verificar que se tiver pelo menos um result ele mostra, se nao ele vai mostrar o erro

        while($row = $result->fetch_assoc()){ // fecth assoc para criar o array assoc, para comparar result ou algo do tipo
            echo $row['id'] . "<br>"; 
            echo $row['nome'] . "<br>";
            echo $row['descricao'] . "<br>";
            
        }
    } else{
        echo "nenhum produto encontrado";
    }
    ?>
    </div>
</div>

<style>
    
</style>
</body>
</html>