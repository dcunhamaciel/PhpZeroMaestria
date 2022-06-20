<?php

    $cincoDias = strtotime("5 days");
    $dataAtualMaisCincoDias = date('d/m/y', $cincoDias);

    $doisMeses = strtotime("2 months");
    $dataAtualMaisDoisMeses = date('d/m/y', $doisMeses);

    echo $cincoDias . "<br>";
    echo $dataAtualMaisCincoDias . "<br>";

    echo $doisMeses . "<br>";
    echo $dataAtualMaisDoisMeses . "<br>";
