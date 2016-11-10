<?php
$b="/";
$a=8;
$h=1;
$c=3;
function event( )
{
    $p=func_num_args();
    $arrayargs=func_get_args();
   # print_r($arrayargs);
   #echo "<br>";
    switch ($arrayargs[0])
    {
        case '-':
            for ($i=1; $i < count($arrayargs); $i++) 
            {
                for ($j=2; $j < count($arrayargs); $j++) 
                {
               $d=$arrayargs[$i];
               $arrayargs[$i]=$arrayargs[$i]-$arrayargs[$j];

                }

            }
        break;
        case '/':
            for ($i=1; $i < count($arrayargs); $i++) 
            {
                for ($j=2; $j < count($arrayargs) ; $j++) 
                {
                $d=$arrayargs[$i];
                $arrayargs[$i]=$arrayargs[$i]/$arrayargs[$j];
                }
            }
        break;
        case '*':
            $d=1;
            for ($i=1; $i < count($arrayargs); $i++) 
            {
                $d=$d*$arrayargs[$i];
            }
       
        break;
        case '+':
       		 $d=0;
       		 for ($i=1; $i < count($arrayargs); $i++)
       		{
       		 $d=$d+$arrayargs[$i];
           	}
        
        break;
    }
    return $d;
}
echo event($b, $a, $h, $c);

?>
