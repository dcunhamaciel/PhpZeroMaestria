<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function andar($metros)
    {
        echo "A pessoa andou $metros mestros <br>";
    }
}

$diego = new Pessoa();
$diego->nome = "Diego";
$diego->idade = 37;

echo "O nome dele é $diego->nome e tem $diego->idade anos <br>";

$diego->andar(20);
