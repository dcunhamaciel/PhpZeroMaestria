<?php

    function alterarDados($nome, $idade)
    {
        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alterarDados("Diego", 37);

    print_r($dados);
