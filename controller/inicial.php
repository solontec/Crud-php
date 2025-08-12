<?php
require_once "../model/conn.php";



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