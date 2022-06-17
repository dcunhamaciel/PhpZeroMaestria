<?php

    $array = [
        "Diego" => 37,
        "Pedro" => 12,
        "Joaquim" => 14,
        "Maria" => 18
    ];

    asort($array);    
    print_r($array);

    ksort($array);
    print_r($array);
