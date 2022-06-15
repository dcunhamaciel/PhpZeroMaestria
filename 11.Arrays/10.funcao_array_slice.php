<?php

    $array = [2, 4, 6, 8, 10, 12, 14, 16, 18];

    $slice1 = array_slice($array, 1, 3);
    $slice2 = array_slice($array, 4, 4);
    $slice3 = array_slice($array, 2);

    print_r($slice1);
    print_r($slice2);
    print_r($slice3);    
