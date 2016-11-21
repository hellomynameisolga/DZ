<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
$json=json_encode($array);
// Превращаем в JSON
$fp=fopen('output.json','w+');
file_put_contents('output.json', $json);
fclose($fp);


$js = file_get_contents('output.json');
// Декодируем
$js = json_decode($js, true);
// Добавляем элемент
$js[] = 'lime';
// Превращаем опять в JSON
$js = json_encode($js);
// Перезаписываем файл
$fp=fopen('output2.json','w+');
file_put_contents('output2.json', $js);

function sravnenie()
{
    $a = file_get_contents('output.json');
    $a = json_decode($a, true);
    $a2 = file_get_contents('output2.json');
    $a2 = json_decode($a2, true);
    foreach ($a as $value1)
    {
        foreach ($a2 as $value2)
        {
            if(!$value1!=$value2)
            {
                echo $value2;
            }
            else {echo "Изменений нет";}
        }
    }

}
sravnenie();
?>

