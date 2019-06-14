<?php

echo "Orientação a Objetos";

class Primeira {
    //Acesso liberado a todos que fazem chamada da classe
    public $nome; // Atributo
    
    public function falar(){ // Método
        
        return "Meu nome é " . $this->nome;//$this é variável para chamar os atributos e incorporar cada classe

    }
}

$vitor = new Primeira();
$vitor->nome = "Vitor Figueredo";

echo "</br>";

echo $vitor->falar();