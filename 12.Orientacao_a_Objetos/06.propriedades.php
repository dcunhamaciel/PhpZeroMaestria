<?php

class Car
{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";
}

$ferrari = new Car();
$ferrari->cor = "Azu";

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
echo $ferrari->cor . "<br>";
