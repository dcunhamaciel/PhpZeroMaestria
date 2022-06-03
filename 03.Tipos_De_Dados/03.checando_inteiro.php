<?php

    if (is_int(5)) {
        echo "5 é um inteiro<br>";
    }

    if (is_int("X")) {
        echo "X é um inteiro<br>";
    }

    $a = 10;

    if (is_int($a)) {
        echo "a variável 'a' é um inteiro<br>";
    }
