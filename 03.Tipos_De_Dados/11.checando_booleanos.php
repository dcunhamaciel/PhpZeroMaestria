<?php

    $a = true;

    if (is_bool($a)) {
        echo "$a é um booleano<br>";
    }

    if (is_bool(0)) {
        echo "0 é um booleano<br>";
    }

    if (is_bool(false)) {
        echo "false é um booleano<br>";
    }

    if (0 == false) {
        echo "0 é considerado falso!<br>";
    }
