<?php
require_once("./data/info.php");
$con = new mysqli($SERV,$USER,$PW,$DB);
if($con->connect_error){
    die("실패");
}
echo("성공");

?>