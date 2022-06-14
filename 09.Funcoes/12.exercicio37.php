<?php

    function definirCorCarro($cor = "Vermelha")
    {
        return "A cor do carro é: $cor";
    }

    echo definirCorCarro() . "<br>";
	echo definirCorCarro("Azul") . "<br>";
