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
    if(!empty($_POST['data'])){
        $conn->query("insert into `student_scores` (`name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sum`, `avg`) values ('".$_POST['name']."',".$_POST['sub1'].",".$_POST['sub2'].",".$_POST['sub3'].",".$_POST['sub4'].",".$_POST['sub5'].",".($_POST['sub1']+$_POST['sub2']+$_POST['sub3']+$_POST['sub4']+$_POST['sub5']).",".(($_POST['sub1']+$_POST['sub2']+$_POST['sub3']+$_POST['sub4']+$_POST['sub5'])/5).")");
    }
    $sql = "select * from student_scores";
    if(!empty($_GET['a'])){
        $sql.=" order by sum";
    }elseif(!empty($_GET['b'])){
        $sql.=" order by sum desc";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="5.php" method="POST">
        <input type="hidden" value="true" name="data">
        <label for="">이름</label>
        <input type="text" name="name">
        <label for="">과목1</label>
        <input type="text" name="sub1">
        <label for="">과목2</label>
        <input type="text" name="sub2">
        <label for="">과목3</label>
        <input type="text" name="sub3">
        <label for="">과목4</label>
        <input type="text" name="sub4">
        <label for="">과목5</label>
        <input type="text" name="sub5">
        <input type="submit">
    </form>
    <br>
    <a href="./5.php?a=b">성적순</a>
    <a href="./5.php?b=c">성적역순</a>
    <br>
    <table>
        <tr>
            <th>번호</th>
            <th>이름</th>
            <th>과목1</th>
            <th>과목2</th>
            <th>과목3</th>
            <th>과목4</th>
            <th>과목5</th>
            <th>합계</th>
            <th>평균</th>
            <th></th>
        </tr>
        <?php
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_row()) {
                    echo("<tr>");
                    echo("<td>$row[0]");echo("</td>");
                    echo("<td>$row[1]");echo("</td>");
                    echo("<td>$row[2]");echo("</td>");
                    echo("<td>$row[3]");echo("</td>");
                    echo("<td>$row[4]");echo("</td>");
                    echo("<td>$row[5]");echo("</td>");
                    echo("<td>$row[6]");echo("</td>");
                    echo("<td>$row[7]");echo("</td>");
                    echo("<td>$row[8]");echo("</td>");
                    echo("<td><a href='javascript:void(0)' onclick='H($row[0])'>삭제</a>");echo("</td>");
                    echo("</tr>");
                }
            }

        ?>
    </table>
    <script>
        function H(z){
            location.href='./delete.php?idx='+z
        }
    </script>
</body>
</html>
<?php $conn->close(); ?>