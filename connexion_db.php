<?php
    $server = "192.168.20.15";
    $base = "djahnit_zemsushis";

    $dsn = "mysql:dbname=$base;host=$server"; // data source name :
    $user = "adel.djahnit";
    $pass = "22/12/1999";

    try {
        $cnx = new PDO($dsn, $user, $pass);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $except) {
        die("Erreur : ". $except->getMessage());
    }
?>
