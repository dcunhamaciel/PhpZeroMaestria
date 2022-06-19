<?php

abstract class Teste
{
    public static function testandoClasse()
    {
        echo "Este método é de uma classe abstrata <br>";
    }

    abstract public function testeAbstract();
}

class Nova extends Teste
{
    public function testeAbstract()
    {
        echo "Teste método abstrato <br>";
    }
}

Teste::testandoClasse();

$n = new Nova();
$n->testeAbstract();
