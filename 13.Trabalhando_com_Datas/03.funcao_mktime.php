<?php

    $dataNascimento = mktime(02, 12, 33, 07, 30, 1984);
    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

    echo $dataNascimento . "<br>";
    echo $dataNascimentoFormatada . "<br>";
