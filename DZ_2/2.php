<?php
$masch =array(1,4,5,2,3,1,0);

$b='/';
function func($arrayName, $a)

{

    $p=func_num_args();
    if ($p == 0) {echo ("введите данные");}

    foreach ($arrayName as $key => $val)
    {
        if (is_string($val) || is_bool($val) || is_array($val))
        {
			echo ("$val не является числом");
        return;
    }

    else
        {
            switch ($a)
            {
                case '/':
                    foreach ($arrayName as $k => $value) {
                        $value=$value/2;
                    }
                    break;
                case '*':
                    foreach ($arrayName as $k => $value) {
                        $value=$value*2;
                    }
                    break;
                case '+':
                    foreach ($arrayName as $k=> $value) {
                        $value=$value+2;
                    }
                    break;
                case '-':
                    foreach ($arrayName as $k => $value) {
                        $value=$value-2;
                    }
                    break;
                default:
                    echo ("Некорректный ввод данных: введите +||-||/||*");
                    break;
            }
            return $value;
        }
    }



}
echo func($masch,$b);
?>