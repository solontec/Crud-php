<?php

class Pessoa{
    public $nome;
    
    public function definirNome($novoNome){
        $this->nome = $novoNome;
    } 

    public function dizerNome(){
    echo "meu nome é " . $this->nome;
    }
}

$p1 = new Pessoa();
$p1->definirNome("Guilherme");
$p1->dizerNome();

?>