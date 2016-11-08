<?php
$maschisel =array(1,4,5,2,3,1,0);
$b='__';
function func($arrayName, $a){
    if (is_array($arrayName)){
        foreach ($arrayName as $key => $value) {
            echo "$newvalue ";
            switch ($a) {
                case '/':
                    $newvalue=$value/2;
                    break;
                case '*':
                    $newvalue=$value*2;
                    break;
                case '+':
                    $newvalue=$value+2;
                    break;
                case '-':
                    $newvalue=$value-2;
                    break;
                default:
                $o="Некорректный ввод данных: введите +||-||/||*";
                    echo $o;
                    break;
                    
            }
        }
    }
    else {
        echo "Некорректный ввод данных: введите массив чисел";
    }


    return $newvalue;

}

func($maschisel,$b);


?>
