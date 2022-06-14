<?php

    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    function listaParaString($array)
    {
        $resultado = "Você levou estes itens do mercado: ";

        for ($i = 0; $i < count($array); $i++) {
            $resultado .= "$array[$i], ";
        }

        $resultado = trim($resultado);
        $resultado = substr($resultado, 0, strlen($resultado) - 1) . ".";

        return $resultado;
    }

    echo listaParaString($lista);
