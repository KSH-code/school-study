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
    $sql = "delete from `student_scores` where idx = ".$_GET['idx'];
    $conn->query($sql);
    $conn->close();
    echo("<script>location.href='./5.php'</script>");
?>