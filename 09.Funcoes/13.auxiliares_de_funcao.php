<?php

    function soma($a, $b): int
    {
        print_r(func_get_args());

        print_r(func_num_args());

        echo "<br>";

        return $a + $b;
    }
    
    echo soma(2 ,4) . "<br>";
