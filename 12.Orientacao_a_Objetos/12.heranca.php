<?php

class Humano
{
    public $idade = 37;    

    public function falar()
    {
        echo "Olá Mundo!";
    }
}

class Programador extends Humano
{

}

$ze = new Humano();
$ze->falar();

$diego = new Programador();
$diego->falar();
