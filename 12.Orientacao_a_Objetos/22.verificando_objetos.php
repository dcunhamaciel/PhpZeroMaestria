<?php

class Humano
{
    public function falar() 
    {
        echo "Olá.";
    }
}

$diego = new Humano();

$teste = 10;

if (is_object($diego)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if (is_object($teste)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($diego) . "<br>";

if (method_exists($diego, "falar")) {
    echo "Método existe <br>";    
} else {
    echo "Método não existe <br>";    
}
