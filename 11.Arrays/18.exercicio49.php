<?php

    $raca = "Vira lata";
    $nome = "Turca";
    $idade = 3;
    $cor = "Preta";
    
    $cachorro = compact("raca", "nome", "idade", "cor");

    foreach ($cachorro as $chave => $valor) {
        echo "$chave: $valor <br>";
    }
