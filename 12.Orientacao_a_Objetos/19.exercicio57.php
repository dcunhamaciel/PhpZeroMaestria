<?php

class Cachorro
{
    public $nome;
    public $cor;
    public $patas;

    public function __construct($nome, $cor, $patas)
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;
    }

    public function exibirAnimal()
    {
        echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas. <br> ";
    }
}

$toto = new Cachorro("Totó", "Preta", 2);
$toto->exibirAnimal();
