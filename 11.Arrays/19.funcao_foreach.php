<?php

    $pessoa = [
        "nome" => "Diego",
        "idade" => 37,
        "profissao" => "Programador"
    ];

    foreach ($pessoa as $chave => $valor) {
        echo "$chave => $valor <br>";
    }
