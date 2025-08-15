<?php
require_once "../model/conn.php";
require_once "../controller/login.php";

session_start(); // sempre colocar sessions start para verificar algo de outro arquivo ( independente de onde)

if(!isset($_SESSION['usuario'])){
    echo "<script> alert('você não pode acessar essa pagina sem logar')</script>";
    echo "<script> window.location.href = 'telaLogin.php'</script>"; 
    // utilizando script dentro de echo para redirecionar e respeitar header com echo
    // sempre usar aspas simples para definir caminhos 
} 



if($_SERVER["REQUEST_METHOD"] === "POST"){

$nomeProduto = $_POST['nome'] ?? '';
$descricao = $_POST['descricao'] ?? '';


$enviarDesc = "INSERT INTO produtos(nome, descricao) VALUES (?, ?)";

$stmt = $conn->prepare($enviarDesc);

if(!isset($stmt)){
    echo "problemas com prepare" . $conn->connect_error;
}


$stmt->bind_param("ss", $nomeProduto, $descricao);

if($stmt->execute()){
    echo "produto cadastrado com sucesso de fato";
} else{
    echo "erro";
};  






}
?>