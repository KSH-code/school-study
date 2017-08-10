<?php

$score = array(
    array(88,98,96,77,63),
    array(4,98,3,77,63),
    array(88,98,7,8,6)
    );
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        echo("\$score[$i][$j] = ".$score[$i][$j]." ");
    }
    echo("<br>");
}

for ($i=0; $i < 3; $i++) { 
    $sum = 0;

for($j=0;$j<5;$j++)
    $sum=$sum+$score[$i][$j];
$avg=$sum/5;
$student_num=$i+1;
echo("$student_num 번째 학생의 점수 => 합계 : $sum, 평균 $avg<br>");
}