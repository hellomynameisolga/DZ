<?php
$b="-";
$a=8;
$d=1;
$c=3;
function event( )
{
    $p=func_num_args();
    $arrayargs=func_get_args();
    print_r($arrayargs);
    $len=count($arrayargs)-1;
    #echo "<br>";
    switch ($arrayargs[0])
    {
        case '-':

            for ($i=1; $i < $len ; $i++) {
                for ($j=2; $j < $len ; $j++) {

                    $arrayargs[$i]=$arrayargs[$i]-$arrayargs[$j];

                }
            }

            echo "$arrayargs[$i]";


            break;
        case '/':
            $d=$arrayargs[1];
            for ($i=1; $i < count($arrayargs); $i++) {
                $d=$d / $arrayargs[i+1];
            }
            break;
        case '*':
            $d=1;
            for ($i=1; $i < count($arrayargs); $i++) {
                $d=$d*$arrayargs[$i];
            }
            break;
    }
    return;
}
echo event($b, $a, $d, $c, $e);
?>
