<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();
    $dataD = new DateTime();

    $dataB->setDate(2025, 10 ,10);
    $dataD->setDate(2025, 10 ,10);

    $dataB->setTime(01, 10 ,10);
    $dataD->setTime(01, 10 ,10);

    if ($dataB > $dataA) {
        echo "A data B é maior que a data A <br>";
    }

    if ($dataA < $dataB) {
        echo "A data A é menor que a data B <br>";
    }

    if ($dataA == $dataC) {
        echo "A data A é igual a data C <br>";
    }

    if ($dataB == $dataD) {
        echo "A data B é igual a data D <br>";
    }
   