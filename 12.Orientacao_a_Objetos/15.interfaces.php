<?php

interface Caracteristicas
{
    const nome = "Diego";

    public function falar();
}

class Humano implements Caracteristicas
{
    public $idade = 29;

    public function falar()
    {
        echo "Olá Mundo! <br>";
    }

    public function dizerNome()
    {
        echo "Meu nome é " . self::nome . "<br>";
    }
}

$diego = new Humano();
