<?php
$a="-";
$q=2;
$y=5;
$t=3;
$i=8;
function event( )
{
    $p=func_num_args();
   	if ($p == 0) {echo ("введите данные");}
    
    $arrayargs=func_get_args();
    #print_r($arrayargs);
    #echo "<br>";
	
	$new_ar = array_slice($arrayargs, 1, count($arrayargs)); 
	foreach ($new_ar as $key => $val) 
	{
		if (is_string($val) || is_bool($val) || is_array($val))
		{ 
			echo "$val не является числом";
			return;
		}
		else 
		{	
		
    switch ($arrayargs[0])
    {
        case '-':
          	foreach ($new_ar as $key => $value) 
          	{
          	$value=$value-2;
           	}
        break;

        case '/':
             foreach ($new_ar as $key => $value)
            {
          	$value=$value/2;
          	}
        break;

        case '*':
            foreach ($new_ar as $key => $value) 
            {
          	$value=$value*2;
            }
        break;

        case '+':
       		 foreach ($new_ar as $key => $value) 
       	    {
          	$value=$value+2;
            }
        break;
    }
	
 	       }
	}

#print_r($new_ar);

return $value;
}
echo event($a, $q, $y, $t, $i);

?>