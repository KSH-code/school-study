<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ksh";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "insert into mem (num,id,name,gender,zipcode,address,tel,age)";
        $sql.=" values(36,'gdhong','홍길동','M','100-011','서울시 은평구 통일로33길','234-8879',44)";
        $conn->exec($sql);
        echo("삽입 완료");
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
        echo("삽입 실패");
    }

    $conn = null;