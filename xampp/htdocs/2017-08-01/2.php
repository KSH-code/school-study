<?php
$score[0]=78;
$score[1]=83;
$score[2]=97;
$score[3]=88;
$score[4]=78;

$sum=0;
for($a=0;$a<=4;$a++){
    $sum=$sum+$score[$a];
}

$avg = $sum/5;

echo("$score[0] $score[1] $score[2] $score[3] $score[4] <br>");
echo("합계 $sum 평균 : $avg");