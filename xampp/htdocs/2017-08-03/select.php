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
    $result=$conn->query("select * from `tb1` where 1");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_row()) {
            echo($row[0]);
            echo($row[1]);
            echo($row[2]);
            echo("<br>");
        }
    }
    $result->free();
    $result=$conn->query("select * from `tb1` where 1");
    echo("<br>");
    echo("<br>");
    echo("<br>");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_array(MYSQLI_NUM)) {
            echo($row[0]);
            echo("<br>");
        }
    }
    $result->free();
    $str = <<<EOT
select `number`,avg(`sales`) from `tb`
where `sales`>=50 
group by `number` having avg(`sales`)>=120 
order by avg(`sales`) desc
EOT;
    $result=$conn->query($str);
    echo("<br>");
    echo("<br>");
    echo("<br>");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_array(MYSQLI_NUM)) {
            echo($row[0].": ");
            echo($row[1]);
            echo("<br>");
        }
    }
    $result->free();
    $conn->close();
?>