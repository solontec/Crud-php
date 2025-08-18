<?php

class Pessoa{
    public $nome;
    public  $idade;

    public function Falar(){
        echo "falou" ;
    }
}


$guilherme = new Pessoa();
$guilherme->nome = "guilherme Solon"; // quando eu acessar atributo nao coloca $ da 
$guilherme->idade = 17;
$guilherme->falar();



echo $guilherme->nome;
echo $guilherme->idade;
