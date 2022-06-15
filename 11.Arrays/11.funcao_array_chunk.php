<?php

    $array = range(1, 20);

    $arrayMulti = array_chunk($array, 4);

    print_r($arrayMulti);
