<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'laundri_kece';

    $conn = mysqli_connect($host, $username, $password);
    mysqli_select_db($conn, $database);

    if(!$conn) die('Can not connect to database');

?>