﻿<?php
$age=65;
if ($age>=18 && $age<65) 
	echo "Вам ещё работать и работать...";
if ($age>=65) {
	echo "Вам пора на пенсию.";
}elseif ($age>=1 && $age<=17){
	echo "Вам ещё рано работать.";

}else {
	echo "Неизвестный возраст.";}

?>