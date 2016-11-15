<?php
$masch =array(1,4,44,88,3,1);
$b='/';

function event($arr, $a)
{
    $p=func_num_args();
    if ($p == 0) {echo ("введите данные");}

    foreach ($arr as $value)
    {
        if(is_string($value)||is_bool($value)||is_float($value))
    {
        echo "Вы передали в массив не число!";
        return;
    }
 }

        switch ($a)
        {
            case "/":
                foreach ($arr as $val){
                    $i=0;
                    $v=$val[$i];
                    $v=$v/$arr[$i+1];
                    $i=$i+1;}
            case "-":
                foreach ($arr as $val){
                    $i=0;
                    $v=$val[$i];
                $v=$v-$arr[$i+1];
                $i=$i+1;}
                break;
            case "+":
                $v=0;
                foreach ($arr as $val){
                $v=$v+$val;}
                break;
            case "*":
                $v=1;
                foreach ($arr as $val){
                 $v=$v * $val;}
                break;
            default:
                $v='Пожалуйста, сделайте новый выбор  математического знака';
                break;
        }
return $v;



}
echo event($masch, $b);

?>