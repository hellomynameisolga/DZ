﻿<?php
$day=-1;
switch ($day) {
    case $day>=1 && $day<=5:
        echo "Это рабочий день";
        break;
    case $day>=1 && $day<=7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
?>