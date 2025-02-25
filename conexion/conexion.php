<?php
    $serverName = "212.28.190.42";
    $connectionOptions = array(
        "Database" => "DB_SITDD",
        "Uid" => "user_std",
        "PWD" => "pr0td3_2025",
        'CharacterSet' => 'UTF-8',
        "TrustServerCertificate" => true
    );

    //Establishes the connection
    //try {
    //     $cnx = sqlsrv_connect($serverName, $connectionOptions);
    //    } catch (\Throwable $th) {
    //     die(print_r($th));
    //    } die(print_r(sqlsrv_errors(), true));

    $cnx = sqlsrv_connect($serverName, $connectionOptions);
