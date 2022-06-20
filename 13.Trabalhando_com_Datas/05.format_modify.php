<?php

    $data = new DateTime();

    echo $data->format('d/m/Y') . "<br>";

    $data->modify("+5 days");

    echo $data->format('d/m/Y') . "<br>";

    $data->modify("-2 months");

    echo $data->format('d/m/Y') . "<br>";
