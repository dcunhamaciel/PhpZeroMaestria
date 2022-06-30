<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 11;
    $nome = "Sofá";
    $descricao = "Sofá semi novo, com madeira de demolição";

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
  
    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if ($stmt->error) {
      echo "Erro: " . $stmt->error;
    }
