<?php

class Cachorro
{
    public function andar($metros)
    {
        echo "O cachorro andou $metros mestros <br>";
    }

    public function latir()
    {
        echo "Au au <br>";
    }
}

$viraLata = new Cachorro();
$pastorAlemao = new Cachorro();

$viraLata->latir();
$pastorAlemao->latir();

$viraLata->andar(1000);
$pastorAlemao->andar(50);
