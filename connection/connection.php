<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'greenTop';

    $connection = new mysqli($server, $username, $password, $db);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    echo "Connected successfully!";