<?php


require_once "../model/conn.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){ // caso receba o form correto ele executa
    $senhaNova = $_POST['senhaNova'] ?? '';
    $emailNovo = $_POST['emailNovo'] ?? '';

$hashSenhaNova = password_hash($senhaNova, PASSWORD_DEFAULT); // aqui eu gero um novo hash so que da senha nova que a pessoa inseriu

$update = "UPDATE usuarios SET senha = ? WHERE email = ?"; // aqui coloco a query onde vai atualizar a senha
// ele atualiza a senha do user para cada email, entao ele pede o email pra saber onde você vai atualizar
$stmt = $conn->prepare($update);

if(!$stmt){
    die("erro no prepare") . $conn->connect_error(); // preapre comum e verificacao
}

$stmt->bind_param("ss", $hashSenhaNova, $emailNovo); // bind param para pegar os dois 

if($stmt->execute()){
    echo "senha atualizada com sucesso";
    echo "<script> window.location.href = '../views/telaLogin.php'</script>"; 
} else{
    echo "erro ao atualizar" . $stmt->error;
}


$stmt->close();
$conn->close();

}
