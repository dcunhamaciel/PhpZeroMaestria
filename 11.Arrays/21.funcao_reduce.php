<?php

    $array = [1, 2, 4, 19, 234, 12, 34, 5, 12];

    function somar($a, $b) {
        return $a + $b;
    }

    $resultado = array_reduce($array, "somar");

    echo $resultado;
