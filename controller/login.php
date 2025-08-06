<?php

require_once "../model/conn.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    echo "o post foi realizado com sucesso";
    $iEmail = $_POST['iEmail'] ?? ''; // os ?? verifica se existe alguma informação e obriga a inserir algo para passar na variavel, garante que a variavel sempre tenha um valor
    $iSenha = $_POST['iSenha'] ?? '';

    if(empty($iEmail) || empty($iSenha)){
        echo "preencha todos os campos";
    } 
    $verificaLogin = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";

    $stmt = $conn->prepare($verificaLogin);

    if(!isset($stmt)){
        echo "erro no prepared stantments";
    } 

    $stmt->bind_param("ss", $iEmail, $iSenha);
    $stmt->execute();

    if(isset($verificaLogin)){
        header('Location: telaInicial.php');
    }

    $conn->close();
    $stmt->close();
}
