<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="3.php" method="GET">
        <input type="text" name="id"><input type="text" name="pw"><input type="submit">
    </form><?php
    if(!empty($_GET['id'])&&!empty($_GET['pw']))
echo($_GET['id'] ." ".$_GET['pw']);?>
</body>
</html>