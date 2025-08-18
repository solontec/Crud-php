<?php
class Notas{
    public $nota1 = 0;
    public $nota2 = 0;
    public $nota3 = 0;
    public $nota4 = 0;

    public function somarTudo($numeroInserir){
        $this->nota1 += $numeroInserir;
        $this->nota2 += $numeroInserir;
        $this->nota3 += $numeroInserir;
        $this->nota4 += $numeroInserir;
        return $this;
    }
}

$soma = new Notas();
$soma->numeroInserir($this->nota1(4));
$soma->numeroInserir($this->nota1(8));
$soma->numeroInserir($this->nota1(9));
$soma->numeroInserir($this->nota1(10));

$soma->somarTudo();


