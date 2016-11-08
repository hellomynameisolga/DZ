<?php
$date_today = date("m.d.y"); 
$today[1] = date("H:i:s"); 
echo("$date_today . $today[1]");
echo "<br>";
$d=mktime(0, 0, 0, 02, 24, 2016);
echo date('d.m.y H:i:s', $d);
?>