<?php
$masch =array(1,4,5,2,3,1,0);
$b='/';
function func($arrayName, $a)
{
    if (is_array($arrayName))
    {
        switch ($a)
        {
            case '/':
                foreach ($arrayName as $key => $value) {
                    $value=$value/2;
                    echo "$value";
                    echo ", ";
                }
                break;
            case '*':
                foreach ($arrayName as $key => $value) {
                    $value=$value*2;
                    echo "$value";
                    echo ", ";
                }
                break;
            case '+':
                foreach ($arrayName as $key => $value) {
                    $value=$value+2;
                    echo "$value";
                    echo ", ";
                }
                break;
            case '-':
                foreach ($arrayName as $key => $value) {
                    $value=$value-2;
                    echo "$value";
                    echo ", ";
                }
                break;
            default:
                echo ("������������ ���� ������: ������� +||-||/||*");
                break;
        }

    }
    else
    {
        echo "������������ ���� ������: ������� ������ �����";
    }
}
func($masch,$b);
?>