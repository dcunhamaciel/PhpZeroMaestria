<?php

class Car
{
    public $rodas = 4;
    private $vidro = "Sem película";

    public function peliculaDeFabrica($pelicula)
    {
        $this->vidro = $pelicula;
    }

    public function getVidro()
    {
        return $this->vidro;
    }
}

class Mecanico
{
    public function alterarRodas($carro)
    {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula)
    {
        $carro->peliculaDeFabrica($pelicula);
    }
}

$carro = new Car();
$diego = new Mecanico();

echo $carro->rodas . "<br>";

$diego->alterarRodas($carro);

echo $carro->rodas . "<br>";

$diego->colocarPelicula($carro, "G20");

echo $carro->vidro . "<br>";
