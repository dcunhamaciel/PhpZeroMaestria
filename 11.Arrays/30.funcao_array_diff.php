<?php

    $array1 = [1, 2, 3];
    $array2 = [2, 4, 6];

    $arrayDiff1 = array_diff($array1, $array2);
    $arrayDiff2 = array_diff($array2, $array1);

    print_r($arrayDiff1);
    print_r($arrayDiff2);
