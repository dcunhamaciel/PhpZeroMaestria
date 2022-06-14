<?php

    $array = [
        "porta" => 100,
        "maçaneta" => 5,
        "motor" => 2000,
        "retrovisor" => 8
    ];

    function itensCaros($array)
    {
        $resultado = [];

        foreach ($array as $item => $preco) {
            if ($preco > 10) {
                array_push($resultado, $item);
            }
        }

        return $resultado;
    }
    
    print_r(itensCaros($array));
