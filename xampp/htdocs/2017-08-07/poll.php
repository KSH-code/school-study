<?php
require_once('./data/info.php');
$con = new mysqli($SERV,$USER,$PW,$DB);
$con->set_charset("utf8");
if(isset($_POST['poll']))
$con->query("update `poll` set count = count + 1 where num = ".$_POST['poll']);
$i=0;
$result = $con->query("select * from poll order by num");
$a=array(0,0,0);
while($row = $result->fetch_row()){
    $a[$i]=$row[1];
    $i++;
}
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
    <p>현재 투표 상황</p>
    <p>1번 : <?php echo($a[0]);?></p>
    <p>2번 : <?php echo($a[1]);?></p>
    <p>3번 : <?php echo($a[2]);?></p>
    <form action="poll.php" method="Post">
    <input type="radio" name="poll" value="1">돈가스 정식
    <input type="radio" name="poll" value="2">된장찌개
    <input type="radio" name="poll" value="3">파스타
    <input type="submit">
    </form>
</body>
</html>