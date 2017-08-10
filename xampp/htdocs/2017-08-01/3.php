<?php
$num = array(5,1,2,7,1,4,8,9,12,23,84,12,74);
$count = sizeof($num);

for ($a=0; $a <$count ; $a++) { 
    echo "$num[$a] ";
}
echo("<br>");
for($i=$count-2;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        if($num[$j]>$num[$j+1]){
            $tmp = $num[$j];
            $num[$j]=$num[$j+1];
            $num[$j+1]=$tmp;
        }
    }
}
for ($a=0; $a <$count ; $a++) { 
    echo "$num[$a] ";
}
echo("<br>");