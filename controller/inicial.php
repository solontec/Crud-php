<?php
require_once "../model/conn.php";
require_once "../controller/login.php";



session_start(); // sempre colocar sessions start para verificar algo de outro arquivo ( independente de onde)




if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nomeProduto = $_POST['nome'] ?? '';
    $descricao = $_POST['descricao'] ?? '';


    $enviarDesc = "INSERT INTO produtos(nome, descricao) VALUES (?, ?)";

    $stmt = $conn->prepare($enviarDesc);

    if(!$stmt){
            echo "problemas com prepare" . $conn->connect_error;
    }


    $stmt->bind_param("ss", $nomeProduto, $descricao);

    if($stmt->execute()){
            echo "produto cadastrado com sucesso de fato";
    } 



    $stmt->close();
    $conn->close();

    header("Location: ../views/telaInicial.php");
    }

    
    
    ?>