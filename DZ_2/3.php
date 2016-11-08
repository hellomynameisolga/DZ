<?php
$b="/";
$a=5;
$d=2;
$c=3;
$e=9;
function event( ){
$p=func_num_args();
$arrayargs=func_get_args();
/*print_r($arrayargs);*/

	switch ($arrayargs[0]) {
	case '+':
		$summa=0;
	for ($i=1; $i <= count($arrayargs); $i++) { 
				$summa=$summa+$arrayargs[$i];
			}
			echo("$summa");
		break;
	case '-':
		$raznost=$arrayargs[1];
	for ($i=1; $i <= count($arrayargs); $i++) { 
				$raznost=$raznost-$arrayargs[$i+1];
			}
			echo("$raznost");
		break;
	case '/':
	$division=$arrayargs[1];
	for ($i=1; $i <= count($arrayargs); $i++) { 
$division=$division / $arrayargs[$i+1];
echo "$division";
			}

		break;
	case '*':
	$proizvedenie=1;
	for ($i=1; $i <= count($arrayargs); $i++) { 
				$proizvedenie=$proizvedenie*$arrayargs[$i];
			}
			echo("$proizvedenie");
		break;
	
	default:
		# code...
		break;

}
}
event($b, $a, $d, $c, $e);
/*
1.	Функция должна принимать переменное число аргументов.
2.	Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
3.	Остальные аргументы это целые и/или вещественные числа.

Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2



*/
?>
