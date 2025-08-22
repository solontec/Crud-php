<?php

class Cadastrar{

    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }
}


$usuario = new Cadastrar();
$usuario->setEmail("tutumsahur");
echo "o usuario é" . $usuario->getEmail();