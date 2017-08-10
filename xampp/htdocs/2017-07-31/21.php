<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
    for ($i= 0; $i<=9; $i++) {
            echo("<tr>");
        for ($j= 2; $j<=9; $j++) {
            if ($i==0) {
                echo("<th>$j 단</th>");
            } else {
                echo("<td>$j*$i=".($i*$j)."</td>");
            }
        }
            echo("</tr>");
    }
    ?>
    </table>
</body>
</html>
