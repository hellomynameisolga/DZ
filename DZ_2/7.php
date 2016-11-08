<?php
$a="Карл у Клары украл Кораллы";
$c="К";
$a2=str_replace($c, "", $a);
echo "$a2";
echo "<br>";
$b="Две бутылки лимонада";
$b2=str_replace('Две', 'Три', $b);
echo "$b2";
?>