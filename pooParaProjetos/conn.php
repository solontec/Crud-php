<?php
declare(strict_types=1);

class Conexao{
    private $host;
    private $user;
    private $pass;
    private $banco;
    private $port;

    public function getHost(){
        return $this->host;
} 

    public function setHost($h){
        $this->host = $h;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($u){
        $this->user = $u;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($p){
        $this->pass = $p;
    }

    public function getBanco(){
        return $this->banco;
    }

    public function setBanco($b){
        $this->banco = $b;
    }

    public function getPort(){
        return $this->port;
    } 

    public function setPort($t){
        $this->port = $t;
    }

    public function conectar(){
        $sql = new mysqli($this->host, $this->user, $this->pass, $this->banco, $this->port );

        if($sql->connect_error){
            echo "erro no banco";
        } else{
            echo "deu bom";
        }

        return $sql;
        echo "deu bom";
    }
}

$conn = new Conexao();
$conn->setHost("localhost");
$conn->setUser("root");
$conn->setPass("");
$conn->setBanco("tbl_crud");
$conn->setPort(3307);