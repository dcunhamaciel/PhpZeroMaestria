<?php

class Carro
{
    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;
    
    public function setVelocidadeMaxima($velocidade)
    {
        $this->velocidadeMaxima = $velocidade;
    }

    public function getVelocidadeMaxima()
    {
        echo "A velocidade máxima deste carro é: $this->getVelocidadeMaxima km/h <br>";
    }    
}

$bmw = new Carro();
$bmw->cor = "Branca";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(200);
$bmw->getVelocidadeMaxima();
