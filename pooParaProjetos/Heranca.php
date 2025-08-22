<?php

// os modificadores de acesso:

/*  public:
 você pode acessar tanto dentro do escopo da classe como fora
ou seja de qualquer lugar você pode acessar.


    protected:
    você acessa o atributo somente dentro da classe
    utilizando getters e setters, acessa dentro do escopo, e dentro do escopo das 
    classes que herdam o veiculo

    private: só consegue acessar dentro do escopo da classe, nem estendendo e nem fora da clase

    
*/
class Veiculo{

    protected $modelo;
    public $cor;
    public $ano;

    public function andar(){
        echo "Andou";
    }

    public function parar(){
        echo "parou";
    }

    

}

class Carro extends Veiculo{


    public function getModelo(){ // posso usar get e set em outra classe mas dentro do escopo
        return $this->modelo;
}

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function ligarLimpador(){
        echo "limpandoo";
    }
}


class Moto extends Veiculo{
    public function darGrau(){
        echo "dando grau";
    }
}

$carro = new Carro();
$carro->setModelo("Ferrari");
echo $carro->getModelo();


