<?php
    $databaseHost = 'localhost';
    $databaseName = 'kedai_topup';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect(
        $databaseHost, 
        $databaseUsername, 
        $databasePassword, 
        $databaseName
    ); 
?>