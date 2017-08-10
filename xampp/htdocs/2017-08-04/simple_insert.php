
    <?php
    $conn = new mysqli("localhost","root","","message");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $conn->set_charset("utf8");
    $conn->query("insert into users values(NULL, '".$_POST['name']."','".$_POST['message']."')");
    $conn->close();
    header('Location: ./simple.html');
?>