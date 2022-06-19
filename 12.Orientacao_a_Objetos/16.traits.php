<?php

trait TraitTest
{
    public function teste()
    {
        echo "Testando trait de objeto <br>";
    }
}

trait AnotherTrait
{
    public function mensagem()
    {
        echo "Este método é da AnotherTrait <br>";
    }
}

class Central
{
    use TraitTest;
    use AnotherTrait;
}

$x = new Central();
$x->teste();
$x->mensagem();
