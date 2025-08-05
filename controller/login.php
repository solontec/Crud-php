<?php

require_once "../model/conn.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $email = $_POST['email'] ?? '';
    $senhaRaw = $_POST['senha'] ?? '';

    if(empty($email) || empty($senhaRaw)){ // utilizando empty para verificar se o campo ( que a pessoa inseriu está vazio)
        echo "preencha todos os campos"; // EMPTY -----
        exit;
    }

    

    $verificar = "SELECT id, email FROM usuarios WHERE email = ? "; // verificar o email para casos de duplicado
    $stmt = $conn->prepare($verificar); // fzd o prepare!
 
    if(!$stmt){
        echo "prepare deu ruim";
    } // caso o prepare nao aconetça da maneira correta ele da erro

    $stmt->bind_param("s", $email); // bind_param para linkar os parametros
    
    $result = $stmt->get_result(); // armazenar dentro dessa variavel o que você pegou do email que a pessoa colocou

        $stmt->execute(); // executar sql
    if($result->num_rows > 0){ // o num_rows ele percorre na variavel que guarda o resultado, caso o mesmo valor for encontrado, > 0, então ele fala q já cadastrou o email
        echo "email cadasrado";
        $stmt->close(); // fecha o prepare
        $conn->close(); // fecha a conexao com banco
        exit(); // o exit é usado para caso a situação aconteça ele da um break igual switch case
    }

    
    $senha = password_hash($senhaRaw, PASSWORD_DEFAULT); // gerando o hash da senha novamente, passando a outra variavel e divindo codigo

    $cadastro = "INSERT INTO usuarios(email, senha) VALUES (?, ?)"; // insere no banco com insert nos campos 

    $stmt = $conn->prepare($cadastro);  // prepara ja o cadsatro novamente

    if(!isset($stmt)){
        echo "erro na preparação"; // verificação para prepare()
    }

    $stmt->bind_param("ss", $email, $senha); // usa o bind_param nos parametros corretos, para linkar com os parametros
    

    if($stmt->execute()){ // se a query der certo e o execute inserir corretamente ele vai cadsatrar
        echo "Usuario cadastrado com sucesso";
    } else{
        echo "erro ao cadastrar:" . $stmt->error;
    }


    $stmt->close();
    $conn->close(); // fecha tudo

}   
    
?> 




