<?php
require_once('./data/info.php');
$con = new mysqli($SERV,$USER,$PW,$DB);
$con->set_charset("utf8");
$result=$con->query("show tables like 'counts'");
if($result->num_rows==0){
    $con->query("create table `counts`(`count` int)");
    $con->query("insert into `counts` values(0)");
}
$con->query("update `counts` set count = count + 1");
$result = $con->query("select * from counts");
while($row = $result->fetch_row()){
    echo($row[0]);
}
?>