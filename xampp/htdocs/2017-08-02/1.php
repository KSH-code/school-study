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

    $sql = "insert into mem (num,id,name,gender,zipcode,address,tel,age)";
    $sql.=" values(36,'gdhong','홍길동','M','100-011','서울시 은평구 통일로33길','234-8879',44)";

    $result=$conn->query($sql);

    if($result)
    echo("삽입 완료");
    else
    echo("실패");

    $conn->close();