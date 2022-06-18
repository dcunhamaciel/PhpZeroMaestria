<?php

class Pessoa
{
    public function falar() 
    {
        echo "Olá eu sou um objeto! <br>";
    }
}

$diego = new Pessoa();
$diego->falar();
