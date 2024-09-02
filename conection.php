<?php
    $host = 'tudb.clever-cloud.com';
    $dbname = 'b9otaheprifrfb0ns5sl';
    $username = 'u1xlxdpbhmkyc69b';
    $password = 'cFhhD3LW6oBFGIyQVIih';
    $port = '3306';

    $conn = new mysqli($host, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } else {
        echo "Conexión exitosa";
    }

    $conn->close();
?>