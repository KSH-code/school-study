<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
<tr>
    <th>번호</th>
    <th>제목</th>
    <th>글쓴이</th>
    <th>날짜</th>
</tr>
    <?php for ($i=1; $i<=10; $i++) { ?>
<tr>
    <?php 
        echo("<td>$i</td>");
        echo("<td>게시판 제목 $i</td>");
        echo("<td>홍길동</td>");
        echo("<td>2013/03/10</td>");
    ?>
</tr>  
    <?php } ?>
</table>
    
</body>
</html>
