<?php

/*  classes abstratas servem apenas para modelos, e usarmos ela 
    ELAS SÃO USADAS APENAS PARA SEREM REFERENCIADAS COMO MODELO E ESTENDERMOS ELA
*/
// nao pode instanciar classes abstratas, só servem de modelo
abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function Sacar($valor); // criar metodos abstratos poara obrigar quem vai consumir a classe banco usar o mesmo modelo
    abstract protected function Depositar($valor);

    public function __construct() {
        $this->saldo = 0;
    }

}

class Itau extends Banco{
    
    public function Sacar($valor){
        $this->saldo -= $valor;
        echo "sacou";
    }

    public function Depositar($valor){
        $this->saldo += $valor;
        echo "depositou valor no itau";
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
}

class Bradesco extends Banco{

     public function Sacar($valor){
        $this->saldo -= $valor;
    }

    public function Depositar($valor){
        $this->saldo += $valor;
        echo "depositou no bradesco";
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }
}

$itau = new Itau();
$itau->setSaldo(22);
$itau->Depositar(66);
echo "saldo da conta itau" . $itau->getSaldo();



$bradesco = new Bradesco();
$bradesco->setSaldo(77.92);
$bradesco->Sacar(76.92);
echo "Saldo bradesco" . $bradesco->getSaldo();