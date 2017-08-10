<?php

$tel ="010-2777-3333";
$num_tel=strlen($tel);
echo ("strlne() 함수 사용 $num_tel<br>");
$tel1=substr($tel,0,3);#앞에서 문자 3개
$tel2=substr($tel,4,4);#4번째부터 4개
$tel3=substr($tel,9,4);#9번째부터 4개

echo ("strlne() 함수 사용 $tel1 $tel2 $tel3<br>");
$phone=explode("-",$tel);
echo("explode() 함수 사용 : $phone[0] $phone[1] $phone[2]");