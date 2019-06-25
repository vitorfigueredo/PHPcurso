<?php

echo "Orientação a Objetos";

class Primeira {
    //Acesso liberado a todos que fazem chamada da classe
    public $nome; // Atributo
    
    public function falar(){ // Método
        
        return "Meu nome é " . $this->nome;//$this é variável para chamar os atributos e incorporar cada classe

    }
}

class Carro {
    private $modelo;
    private $marca;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function getAno(){
        return $this->ano;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
}

$vitor = new Primeira();
$vitor->nome = "Vitor Figueredo";

echo "</br>";

echo $vitor->falar();

echo "</br>";
echo "</br>";


$corolla = new Carro();
$corolla->setModelo("Corolla");
$corolla->setMarca("Toyota");

echo "O modelo do carro é: " . $corolla->getModelo() . ", carro da marca " . $corolla->getMarca();
