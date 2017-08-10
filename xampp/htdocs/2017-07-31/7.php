<?php
    $a=7;
    $b=8;
    echo("a : $a, b : $b <br>");
    $a++;
    $b--;
    echo("a++ : $a, b-- : $b <br>");
    $b=$a*$b+2;
    $c=$a+$b;
    echo("c = a + a * b + 2$c<br>");

    $c=$a%$b;
    $b=$a+2;
    $a=$a*3;
    echo("a*3=$a <br>");
    echo("b=a+2$b <br>");
    echo("c=a%b=$c <br>");
?>