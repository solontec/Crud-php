<?php

require_once "../model/conn.php";


if($_SERVER["REQUEST_METHOD"] === "POST"){

    
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL); // aqui ele serve  para limpar o valor, removendo caracteres inválidos de um email. 
    
    // o filter_sanitize_email não veriifica se o email é valido, apenas "prepara" e limpa caracteres que n deveriam estar ali
    $senha = htmlspecialchars($_POST['senha'] ?? '', ENT_QUOTES, 'UTF-8') ; // usado para defesa de XSS, que basicamente vamos controlar os dados recebidos para não receber scripts maliciosos

    //escapando caracteres especiais da senha, como <, >, &, e outros que poderiam ser usados para inserir scripts maliciosos.
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // validar de fato o email para caso nao esteja no modelo ele nao segue com o cadastro
       echo "email inválido" ;  
    }
    if(empty($email) || empty($senha)){ // utilizando empty para verificar se o campo ( que a pessoa inseriu está vazio)
        echo "preencha todos os campos"; // EMPTY -----
        exit();
    } 



    $verificar = "SELECT id, email FROM usuarios WHERE email = ?"; // verificar o email para casos de duplicado
    $stmt = $db->prepare($verificar); // fzd o prepare!
 
    if(!$stmt){
        echo "prepare deu ruim";
    } // caso o prepare nao aconetça da maneira correta ele da erro

    $stmt->bind_param("s", $email); // bind_param para linkar os parametros
    $stmt->execute();

        
    $result = $stmt->get_result(); // armazenar dentro dessa variavel o que você pegou do email que a pessoa colocou

    if($result->num_rows > 0){ // o num_rows ele percorre na variavel que guarda o resultado, caso o mesmo valor for encontrado, > 0, então ele fala q já cadastrou o email
        echo "já possui um email cadastrado!";
        exit(); // o exit é usado para caso a situação aconteça ele da um break igual switch case
    }

    
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT); // gerando o hash da senha novamente, passando a outra variavel e divindo codigo
    $cadastro = "INSERT INTO usuarios(email, senha) VALUES (?, ?)"; // insere no banco com insert nos campos 
    $stmt = $db->prepare($cadastro);  // prepara ja o cadsatro novamente

    

    if(!isset($stmt)){
        echo "erro na preparação"; // verificação para prepare()
    }

    $stmt->bind_param("ss", $email, $senhaHash); // usa o bind_param nos parametros corretos, para linkar com os parametros
    
    if($stmt->execute()){
        header('Location: telaLogin.php');
    }

    $stmt->close();
    $db->close(); // fecha tudo
}
?> 



