<pre>
<?php
$str="Нет будущего другого, кроме того, что мы творим сами.";
echo "$str </br>";
$arr=explode(" ", $str);
print_r($arr);
$i = count($arr);
do {
    echo ("!$arr[$i]");
    --$i;
} while ($i >=0);
?>

 </pre>