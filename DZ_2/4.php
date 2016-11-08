<?php
$c=8;
$d=9;
function umnojenie($a, $b)
{
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $b; $j++) {
            $z = $i * $j;
            if ($a == $b) {
                echo("$z &nbsp &nbsp &nbsp");
            } else {
                echo(" Введите два равных числа! ");
            }
        }
         echo "<br/>";
    }
}
        umnojenie($c,$d);
?>