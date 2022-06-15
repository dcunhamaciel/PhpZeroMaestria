<?php

    $str = "Testando palavra teste, em uma string que tem teste mais de uma vez";
    
    $palavra = strrpos($str, "teste");    

    echo $palavra . "<br>";
