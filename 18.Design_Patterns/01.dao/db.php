<?php

    $db = "dao";
    $host = "localhost";
    $user = "sysdba";
    $pass = "masterkey";

    $conn = new PDO("pgsql:dbname=$db;host=$host", $user, $pass);
