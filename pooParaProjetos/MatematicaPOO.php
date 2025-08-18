<?php

class Calcular{

    public $resultado = 0;

    public function somar($valor){
        $this->resultado  += $valor; 
        return $this;
    }

    public function subtrair($valor){
        $this->resultado -= $valor;
        return $this;
    }

    public function multiplicar($valor){
        $this->resultado *= $valor;
        return $this;
    }

    public function mostrar(){
        echo "resultado:   <br>" .  $this->resultado;
    }
}


$cal = new Calcular();
$cal->somar(10);
$cal->multiplicar(5);
$cal->mostrar();



