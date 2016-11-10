<?php
echo "<table border = 1>";
$c=13;
$d=13;
function umnojenie($a, $b)
{
	 if ($a!=$b) 
	 {
     echo(" Введите два равных числа! ");
     }

    for ($i = 1; $i <= $a; $i++) 
    {
    	echo "<tr>";
        for ($j = 1; $j <= $b; $j++)
         { 
         	$z = $i * $j;
            echo "<td> $z &nbsp &nbsp </td>";     
         }
            echo "</tr>";
    }
    return ;   
}
umnojenie($c, $d);
?>