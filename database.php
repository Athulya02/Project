<?php

    define('DB_HOST', 'localhost:3306');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'project');

    # create connection

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    # check connection

    // if($connection->connect_error){
    //     die('Connection failed' . $connection->connect_error);
    // }else{
    //     echo 'connected';
    // }
?>