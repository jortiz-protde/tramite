<?php
$serverName = "192.168.1.2";
$connectionOptions = array(
    "Database" => "DB_TRAMITE",
    "Uid" => "usr",
    "PWD" => "********",
    'CharacterSet' => 'UTF-8'
);
$cnx = sqlsrv_connect($serverName, $connectionOptions);