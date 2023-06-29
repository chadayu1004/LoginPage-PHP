<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    // Crate Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check Connection
    if (!$conn) {
        die("Conection feiled" . mysqli_connect_error());
    } //else {
    //     echo "Connected successfully";
    // }
?>