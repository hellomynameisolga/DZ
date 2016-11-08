<?php
mb_internal_encoding('utf-8');
$a="а роза упала на лапу Азора";
palindrom($a);

function palindrom($b)
	{
$b=mb_strtolower($b);
echo "$b";
$d=str_replace(' ', '', $b);
$d = iconv('utf-8', 'windows-1251', $d);
$c=strrev($d);
$c = iconv('windows-1251', 'utf-8', $c);
$d = iconv('windows-1251', 'utf-8', $d);
echo "$c";
echo "$d";
 	if ($c==$d) {
	echo $result = true;
}
else { 
	echo $result = false;
		}
		return $result;
		echo "$result";
	 soobshenie($result);
}
function soobshenie($res) {
	if ($res==1){
			$massage="Данная строка является палиндромом"; 
					}
		else {
			$massage="Данная строка не является палиндромом";
		}
return "$massage";
echo "$massage";
}
?>