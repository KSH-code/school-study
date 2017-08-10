<?php
require_once('./data/info.php');
$con = new mysqli($SERV,$USER,$PW,$DB);
$con->set_charset("utf8");
$con->query("update `counts` set count = count + 1");
echo("방문 횟수 : ");
$result = $con->query("select * from counts");
while($row = $result->fetch_row()){
    echo($row[0]);
}
?>