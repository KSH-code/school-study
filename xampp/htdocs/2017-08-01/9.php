<?php
function hap($a,$b)
{
    $sum=0;
    while($a<=$b){
        $sum=$sum+$a;
        $a++;
    }return $sum;
}

$from =1;
$to =100;
$total =hap($from,$to);
echo("$from 에서 $to 까지 합 : $total");