<?php
$nowyear = 2017;
$nowmonth = 8;
$nowdate = 1;

$birthyeer = 1990;
$birthmonth = 3;
$birthdate = 30;

if ($birthmonth < $nowmonth) {
    $age = $nowyear - $birthyeer;
} elseif ($birthdate <= $nowmonth) {
    if ($birthdate<= $nowday) {
        $age = $nowyear - $birthyeer;
    } else {
        $age = $nowyear - $birthyeer - 1;
    }
} else {
    $age = $nowyear - $birthyeer - 1;
}


echo "오늘 날짜 : $nowyear 년 $nowmonth 월 $nowdate 일 <br>";
echo "출생 연월일 : $birthyeer 년 $birthmonth 월 $birthdate 일<br>";
echo "만 나이 : $age ";
