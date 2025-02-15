<?php
    //$serverName = "192.168.1.18";
    $serverName = "192.168.1.47";
    //$serverName = "192.168.1.45";
    $connectionOptions = array(
        //"Database" => "DB_SITDD_DEV",
        "Database" => "DB_SITDD",
        //"Database" => "DB_SITDD_DESA",
        "Uid" => "sa",
        //"PWD" => "apci2018",
        // "Uid" => "sa",
        "PWD" => "Thanath0s2018",
        //"PWD" => "sistemas$%",
        'CharacterSet' => 'UTF-8',
    );
    //Establishes the connection
    $cnx = sqlsrv_connect($serverName, $connectionOptions);
?>