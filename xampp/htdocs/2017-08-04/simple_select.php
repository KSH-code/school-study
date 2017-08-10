<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$conn = new mysqli("localhost","root","","message");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $conn->set_charset("utf8");
    $result = $conn->query("select * from users");
    echo("접속 OK!");
?>
<table>
<?php
while($row = $result->fetch_row()){
    echo("<tr>");
    echo("<td>");
    echo($row[0]." : ");
    echo($row[1]." : ");
    echo($row[2]);
    echo("</td>");
    echo("</tr>");
}
$result->close();
$conn->close();
?>
</table>
</body>
</html>