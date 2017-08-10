<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['content']=$_POST['content'];
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
    
    <form action="./view.php" method="post">
    글쓰기
    <br>
    이름:
    <?php
        echo($_SESSION['name']);
    ?>
    <br>
    본문:
    <textarea name="content" id="" cols="30" rows="10" readonly>
       <?php echo($_SESSION['content']);?></textarea>
    <input type="submit" value="확인">
    <a href="./form.html">되돌아가기</a>
</form>
</body>
</html>