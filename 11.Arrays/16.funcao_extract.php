<?php

    $array = [
        "cor" => "vermelho",
        "forma" => "retangular",
        "material" => "aço"
    ];

    extract($array);

    echo $cor . "<br>";
    echo $forma . "<br>";
    echo $material . "<br>";
