<?php
$a=2;
$b=6;
$c=9;
if ($a>$b) {
    if ($a>$c) {
        $max1=$a;
        if ($b>$c) {
            $max2=$b;
            $max3=$c;
        } else {
            $max2=$c;
            $max3=$b;
        }
    } else {
        $max1=$c;
        $max2=$a;
        $max3=$b;
    }
} else {
    if ($a>$c) {
        $max1=$b;
        $max2=$a;
        $max3=$c;
    } else {
        if ($b>$c) {
            $max1=$b;
            $max2=$c;
            $max3=$a;
        } else {
            $max1=$c;
            $max2=$b;
            $max3=$a;
        }
    }

}
echo("입력된 세 정수 : $a $b $c<br>");
echo("입력된 세 정수 : $max1 $max2 $max3<br>");
