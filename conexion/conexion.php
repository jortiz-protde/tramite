<?php
    $serverName = "172.17.64.1";
    $connectionOptions = array(
        "Database" => "DB_SITDD",
        "Uid" => "sa",
        "PWD" => "123456",
        'CharacterSet' => 'UTF-8',
        "TrustServerCertificate" => true
    );

    // $serverName = "164.90.152.189";
    // $connectionOptions = array(
    //     "Database" => "DB_SITDD",
    //     "Uid" => "sa",
    //     "PWD" => "Aurea147",
    //     'CharacterSet' => 'UTF-8'
    // );

    // $serverName = "164.90.152.189";
    // $connectionOptions = array(
    //     "Database" => "DB_SITDD",
    //     "Uid" => "sa",
    //     "PWD" => "Aurea147",
    //     'CharacterSet' => 'UTF-8'
    // );

    // $serverNameAIP = "192.168.1.45";
    // $connectionOptionsAIP = array(
    //     "Database" => "DB_AIP",
    //     "Uid" => "sa",
    //     "PWD" => "sistemas$%",
    //     'CharacterSet' => 'UTF-8'
    // );
    
    // $serverName = "192.168.1.46";
    // $connectionOptions = array(
    //     "Database" => "DB_SITDD",
    //     "Uid" => "sa",
    //     "PWD" => "sistemas$%",
    //     'CharacterSet' => 'UTF-8'
    // );

    // $serverName = "192.168.1.47";
    // $connectionOptions = array(
    //     "Database" => "DB_SITDD",
    //     "Uid" => "sa",
    //     "PWD" => "Thanath0s2018",
    //     'CharacterSet' => 'UTF-8'
    // );

    // $serverNameAIP = "192.168.1.47";
    // $connectionOptionsAIP = array(
    //     "Database" => "DB_AIP",
    //     "Uid" => "sa",
    //     "PWD" => "Thanath0s2018",
    //     'CharacterSet' => 'UTF-8'
    // );

    //Establishes the connection
    // try {
    //     $cnx = sqlsrv_connect($serverName, $connectionOptions);
    //    } catch (\Throwable $th) {
    //     die(print_r($th));
    //    } die(print_r(sqlsrv_errors(), true));

    $cnx = sqlsrv_connect($serverName, $connectionOptions);

    // $cnxAIP = sqlsrv_connect($serverNameAIP, $connectionOptionsAIP);