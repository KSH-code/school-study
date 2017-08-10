
    <?php
    $conn = new mysqli("localhost","root","","message");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $conn->set_charset("utf8");
    $conn->query("delete from users where idx =".$_GET['idx']);
    $conn->close();
    header('Location: ./simple.html');
?>