<?php
$file=fopen("anothertest.txt","a+t");
$string="Hello again!";
fwrite($file, $string);
fclose($file);
$file=fopen("anothertest.txt", "r+");
while (feof($file)){
	echo (fread($file, 1));
}



?>
