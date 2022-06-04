<?php

    class Pessoa 
    {
        function falar() 
        {
            echo "Olá pessoal!";
        }
    }

    $diego = new Pessoa();
    $diego->nome = "Diego";

    echo $diego->nome;
    echo "<br>";
    echo $diego->falar();
