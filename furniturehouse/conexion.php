<?php
    
    $serverName = "tcp:192.168.10.162,1433";
    $connectionOptions = array("Database"=>"usuario","Uid"=>"connect_user","PWD"=>"Almi123");
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if(!$conn){
        die( print_r( sqlsrv_errors(), true));
    }
    return $conn;

?>