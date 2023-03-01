<?php

class Automoveis{

    private $tipo;
    private $cor;
    private $placa;
    private $numportas;

    public function getTipo(){
        return $this->tipo;
    }
    
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function getNumportas(){
        return $this->numportas;
    }

    public function setNumportas($numportas){
        $this->numportas = $numportas;
    }
}

?>