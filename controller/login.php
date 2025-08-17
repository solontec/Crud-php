<?php

require_once "../model/conn.php";



if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST['email'] ?? ''; // os ?? verifica se existe alguma informação e obriga a inserir algo para passar na variavel, garante que a variavel sempre tenha um valor
    $senha = $_POST['senha'] ?? '';

    if(empty($email) || empty($senha)){
        echo "preencha todos os campos";
    }   

    
    $verificaLogin = "SELECT email, senha  FROM usuarios WHERE email = ?";

    
    
    $stmt = $conn->prepare($verificaLogin);

    if(!isset($stmt)){
        echo "erro no prepared stantments" . $conn->error   ;
    } 
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result(); // pega o resultado e armazena dentro dessa variavel resultado, se refereindo a consulta sql

     

     // o fecth assoc é um array associativo, na qual vai aparecer dentro de um array os campos email e senha

        // guarda dentro deles essa informação.
            //guardou dentro de usuarios [email: *** , senha : ****]
            
            //verificar agora a senha corretamente com a funcao passord_verify, para ver se bate a senha cripto
            // com a senha inserida
 
    if($resultado->num_rows === 1){
        // passa o result para $usuario com fetch assoc
        $usuario = $resultado->fetch_assoc();
        
        var_dump($senha);
        var_dump($_SESSION['usuario']);

            if(password_verify($senha , $usuario['senha'])){
                session_start();
                $_SESSION['usuario'] = true;
                header("Location: ../views/telaInicial.php");
                exit();
            } else{
                echo "senha incorreta";
            }

    
    }
    
}


