<?php
$a=1;
switch ($a) {
    case 1:
        $b="3만원";
        break;
    case 2:
        $b="3만 5천원";
        break;
    case 3:
        $b="4만원";
        break;
    case 4:
        $b="4만 5천원";
        break;
    case 5:
        $b="5만원";
        break;
    case 6:
        $b="5만원 5천원";
        break;
    default:
        $b="학생이 아닙니다";
        echo($b);
        exit;
}
echo("$a 학년 급식비 : $b");
