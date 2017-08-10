<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="radio_receive.php">
    <?php
        for($i=1;$i<=100;$i++){
            echo("<input type='radio' name='age' value='$i'>$i");
            if($i%10==0){
                echo("<br>");
            }
        }
    ?>
    <input type="submit">
    </form>
</body>
</html>