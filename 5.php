<?php
$day=7;
switch ($day) {
    case $day<=5:
        echo "Это рабочий день";
        break;
    case $day<=7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
?>