<?php	
	// $serverName = "192.168.1.45";
    // $connectionOptions = array(
    //     "Database" => "DB_SITDD",
    //     "Uid" => "sa",
    //     "PWD" => "sistemas$%",
    //     'CharacterSet' => 'UTF-8'
    // );

    $serverName = "172.17.64.1";
    $connectionOptions = array(
        "Database" => "DB_SITDD",
        "Uid" => "sa",
        "PWD" => "123456",
        'CharacterSet' => 'UTF-8',
        "TrustServerCertificate" => true
    );
	//Establishes the connection
	$cnx2 = sqlsrv_connect($serverName, $connectionOptions);
?>
