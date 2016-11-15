<?php
$a="*";
$q=8;
$y=1;
$t=1;
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
        if (is_string($val) || is_bool($val) || is_array($val)) {
            echo "$val не является числом";
            return;
        }
    }

    switch ($arrayargs[0])
    {
        case '-':
            $v=$new_ar[0];
            foreach ($new_ar as $key => $value)
            {
                $v=$v-$value;
            }
            break;

        case '/':
            $v=$new_ar[0];
            foreach ($new_ar as $key => $value)
            {
                $v=$v/$value;
            }
            break;

        case '*':
            $v = 1;
            foreach ($new_ar as $key => $value)
            {
                $v =$v*$value;
            }
            break;

        case '+':
            $v=0;
            foreach ($new_ar as $key => $value)
            {
                $v=$v+$value;
            }
            break;

    }


#print_r($new_ar);
return $v;
}
echo event($a, $q, $y, $t, $i);

?>