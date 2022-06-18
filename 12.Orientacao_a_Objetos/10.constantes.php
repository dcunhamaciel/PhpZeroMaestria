<?php

class Humano
{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante()
    {
        echo Self::BRACOS . "<br>";
    }
}

$diego = new Humano();

echo $diego::OLHOS . "<br>";
