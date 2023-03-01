<?php

require_once("automoveis.class.php");

class Exec{

    private $carros;

    public function __construct(){

        $porsche = new Automoveis();

        $porsche-> setTipo("Tipo: Porsche <br>");
        $porsche-> setCor("Cor: Cinza <br>");
        $porsche-> setPlaca("Placa: MHZ-4345 <br>");
        $porsche-> setNumportas("Número de Portas: 2 <br>");

        echo $porsche->getTipo();
        echo $porsche->getCor();
        echo $porsche->getPlaca();
        echo $porsche->getNumportas();

        $ferrari = new Automoveis();

        $ferrari-> setTipo("<br>Tipo: Ferrari <br>");
        $ferrari-> setCor("Cor: Vermelho <br>");
        $ferrari-> setPlaca("Placa: JKL-0001 <br>");
        $ferrari-> setNumportas("Número de Portas: 4 <br>");

        echo $ferrari->getTipo();
        echo $ferrari->getCor();
        echo $ferrari->getPlaca();
        echo $ferrari->getNumportas();
    }

}new Exec();

?>