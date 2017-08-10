<?php
$id =$_POST['i'];
$pw =$_POST['p'];
$conn = new mysqli("localhost","root","","member");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $conn->set_charset("utf8");
    $result = $conn->query("select * from users where admin='$id' and userpw='$pw'");
    $row = $result->fetch_row();
    if(sizeof($row)==3){
        echo("안녕하세요 $row[2]님");
    }else{
        echo("아이디나 비밀번호를 확인해주세요");
    }
    $result->close();
    $conn->close();