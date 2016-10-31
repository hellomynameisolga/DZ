<?php
$str="Нет будущего другого, кроме того, что мы творим сами.";
echo "$str </br>";
$arr=explode(" ", $str);
print_r($arr);
$i=count($arr);
$j=0;
do {$d[$j]=$arr[$i];
 $i--;
 $j++;
} while ($i>=0);
echo $d[$j];
?>
