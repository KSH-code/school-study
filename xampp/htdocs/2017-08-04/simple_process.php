
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            require_once("db/info.php");
            $conn = new mysqli($server,$name,$password,"message");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $conn->set_charset("utf8");
            echo("접속 OK!");
            $type = $_POST['p'];
            if($type=="search"){
                $result = $conn->query("select * from users where message like '".strip_tags($_POST['keyword'])."%'");
                while($row = $result->fetch_row()){
                    echo("<tr>");
                    echo("<td>");
                    echo($row[0]." : ");
                    echo($row[1]." : ");
                    echo($row[2]);
                    echo("</td>");
                    echo("</tr>");
                }
            }elseif($type=="delete"){
                $conn->query("delete from users where idx =".preg_replace('/[^0-9]/','',strip_tags($_POST['idx'])));
                header('Location: ./simple2.html');
            }elseif($type=="insert"){
                $conn->query("insert into users values(NULL, '".strip_tags($_POST['name'])."','".strip_tags($_POST['message'])."')");
                header('Location: ./simple2.html');
            }else{
                $result = $conn->query("select * from users");
        ?>
        <?php
                while($row = $result->fetch_row()){
                    echo("<tr>");
                    echo("<td>");
                    echo($row[0]." : ");
                    echo($row[1]." : ");
                    echo($row[2]);
                    echo("</td>");
                    echo("</tr>");
                }
            }
            $result->close();
            $conn->close();
        ?>
    </table>
</body>
</html>