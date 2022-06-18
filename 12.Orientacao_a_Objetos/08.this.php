<?php

class Animal
{
    public $nome;

    public function escolherNome($nome)
    {
        $this->nome = $nome;
    }
}

$frida = new Animal();
$frida->escolherNome("Frida");

echo "O nome do animal é $frida->nome <br>";
