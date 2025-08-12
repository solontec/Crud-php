<?php
require_once "../model/conn.php";
require_once "../controller/inicial.php";

if($_SERVER["REQUEST_METHOD"] === "GET"){
$nome = $_GET['nome'] ?? '';
$descricao = $_GET['descricao'] ?? '';


$exibirProdutos = "SELECT * FROM produtos WHERE nome = ? AND descricao = ?";

$prepQuery = $conn->prepare($exibirProdutos);





}
?>