<?php
session_start();
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
    <p><?php echo($_SESSION['name']);?>님으로부터의 메시지</p>
    <p>본문 : <?php echo($_SESSION['content']);?>님으로부터의 메시지</p>
    <a href="./form.html">되돌아가기</a>
</form>
</body>
</html>