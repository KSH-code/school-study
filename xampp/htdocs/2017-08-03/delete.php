<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "ksh");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $conn->set_charset("utf8");
    $conn->query("delete from `tb1` where name='박문수'");
    $conn->close();
?>