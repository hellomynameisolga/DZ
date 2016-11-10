<?php

$text="Да. Нет. Да. Да.";
$mst=explode(".", $text);
function massiv($arrayName, $bool=false)
{  
	if ($bool==true)
	{
		$a= implode(" ", $arrayName);
		return $a;						
	}
	else 
	{
			for ($i=0; $i <count($arrayName) ; $i++) 
			{ 
		echo "<p>$arrayName[$i]</p>";
			}
	}
}
echo massiv($mst);
/*Задание #1
1.	Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
2.	Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.*/
?>
