<?php

    $array = [
        "nome" => "Diego",
        "idade" => 29
    ];

    if (array_key_exists("nome", $array)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if (isset($array["nome"])) {
        echo "A chave existe ISSET <br>";
    } else {
        echo "A chave não existe ISSET <br>";
    }
