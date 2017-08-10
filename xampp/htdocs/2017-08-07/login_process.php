<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
if($id=='admin'&&$pw=='admin'){
    session_start();
    $_SESSION['name']='홍길동';
    echo($_SESSION['name']);
    echo("님 환영합니다<br>");
    echo("<a href='./logout.php'>로그아웃</a>");
}else{
    echo("로그인 실패");
    echo("<a href='./login.html'>돌아가기</a>");
}
?>