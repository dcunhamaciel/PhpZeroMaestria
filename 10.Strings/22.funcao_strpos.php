<?php

    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";
    
    $testeEncontrar1 = strpos($str, "strpos");
    $testeEncontrar2 = strpos($str, "java");

    echo $testeEncontrar1 . "<br>";
    
    if ($testeEncontrar2 === false) {
        echo "Palavra não encontrada <br>";
    }
