<?php

    $str = "Diego";
    $num = 12;

    if (is_string($str)) {
        echo "$str é uma string<br>";
    }

    if (is_string($num)) {
        echo "$num é uma string<br>";
    }

    if (is_string("abc")) {
        echo "'abc' é uma string<br>";
    }
