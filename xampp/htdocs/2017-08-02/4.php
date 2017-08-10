<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "ksh");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $conn->set_charset("utf8");
    $sql = "select * from mem";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th bgcolor="#CCC">일렬번호</th>
        <th bgcolor="#CCC">아이디</th>
        <th bgcolor="#CCC">이름</th>
        <th bgcolor="#CCC">우편번호</th>
        <th bgcolor="#CCC">주소</th>
        <th bgcolor="#CCC">번호</th>
        <th bgcolor="#CCC">나이</th>
    </tr>
    <?php
        $result=$conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_row()) {
                echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3] ."</td><td>". $row[4]." </td><td>". $row[5] ."</td><td>". $row[6]." </td></tr>";
            }
        }

        $conn->close();
    ?>
    </table>
</body>
</html>