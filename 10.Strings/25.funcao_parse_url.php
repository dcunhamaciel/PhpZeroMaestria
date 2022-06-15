<?php

    $url = "https://www.google.com";
    
    $arrayUrl = parse_url($url);

    print_r($arrayUrl);

    echo "<br>" . $arrayUrl["host"];
