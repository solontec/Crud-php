<?php

// quando usamos private e queremos acessar usamos getters e setters
class Login{
    private $email;
    private $senha; 
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){ 
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function logar(){
        if($this->email == "teste@gmail.com" && $this->senha == "123" ){
             echo "logado";  
        } else{
            echo "dados invalidos";
        }

            
    }
}

$logar = new Login("teste@gmail.com", "123", "Guilherme");
$logar->logar();

echo "<br>";
echo $logar->getEmail();

echo "<br>";
echo $logar->getSenha();