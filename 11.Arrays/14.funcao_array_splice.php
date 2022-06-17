<?php

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    $removidos = array_splice($array, 1, 2);

    print_r($array);
    print_r($removidos);
