<?php
    session_start();
    $count=1;
    if(isset($_SESSION["count"])){
        $count=$_SESSION["count"];
        $count++;
    }
    $_SESSION["count"]=$count;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>