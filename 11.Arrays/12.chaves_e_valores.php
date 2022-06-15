<?php

    $carro = [
        "marca" => "BMW",
        "motor" => "2.4",
        "teto_solar" => true,
        "cambio" => "Manual",
        "portas" => 4
    ];

    $arrayChaves = array_keys($carro);
    $arrayValores = array_values($carro);

    print_r($arrayChaves);
    print_r($arrayValores);
