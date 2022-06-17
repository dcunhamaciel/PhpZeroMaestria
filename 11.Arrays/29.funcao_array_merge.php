<?php

    $array1 = [1, 2, 3];
    $array2 = [10, 40, 90];
    $array3 = [2.1, 44.5, 43.3];
    $array4 = ["ABC", "XYZ"];

    $arrayMerge = array_merge($array1, $array2, $array3, $array4);

    print_r($arrayMerge);
