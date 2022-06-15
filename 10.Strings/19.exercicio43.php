<?php

    $str = "carro - navio - helicóptero - barco - jangada";
    
    $array = explode(" - ", $str);

    for ($i = 0; $i < count($array); $i++) {
        echo "Item: $array[$i] <br>";
    }
