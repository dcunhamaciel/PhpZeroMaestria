<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2001, 10 ,15);

    $dataDiferenca = $dataA->diff($dataB);

    print_r($dataDiferenca);

    echo $dataDiferenca->format("%a days");
