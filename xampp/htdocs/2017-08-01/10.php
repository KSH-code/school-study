<?php
function man_age($nowyear,$nowmonth,$nowday,$birthyear,$birthmonth,$birthdate){
if ($birthmonth < $nowmonth) {
    $age = $nowyear - $birthyear;
} elseif ($birthdate <= $nowmonth) {
    if ($birthdate<= $nowday) {
        $age = $nowyear - $birthyear;
    } else {
        $age = $nowyear - $birthyear - 1;
    }
} else {
    $age = $nowyear - $birthyear - 1;
}
return $age;
}
$nowyear=2017;
$nowmonth = 8;
$nowdate = 1;

$birthyear = 1990;
$birthmonth = 3;
$birthdate = 30;
$your_age=man_age($nowyear,$nowmonth,$nowdate,$birthyear,$birthmonth,$birthdate);
echo ("만 나이 : $your_age");