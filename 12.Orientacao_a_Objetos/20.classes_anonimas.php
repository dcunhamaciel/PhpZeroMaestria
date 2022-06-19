<?php

$pessoa = new class() 
{

    public $nome = "Diego";

    public function dizerNome()
    {
        echo "Olá, meu nome é $this->nome <br>";
    }    
};

echo $pessoa->dizerNome();
