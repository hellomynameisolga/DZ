<?php
$bmw=array("model"=>"X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015");
$toyota=array("model"=>"X1",
    "speed"=>"120",
    "doors"=>"3",
    "year"=>"2010");
$opel=array("model"=>"X5",
    "speed"=>"110",
    "doors"=>"4",
    "year"=>"2005");
echo "<br />";
function arraySum() 
{
	$result = array(); // здесь будет объединение массивов
     
    foreach($bmw as $val) { // считываем первый массив
        $result[] = $val;
    }
     
    foreach($toyota as $val) { // считываем 2-ой  массив
        $result[] = $val;
    }
     foreach($opel as $val) { // считываем 3-ий  массив
        $result[] = $val;
    }
     
    return $result;
}
arraySum($bmw, $toyota, $opel);
print_r($result);
echo "<br />";

foreach ($result as $key=>$value) {
    echo $key;
    echo "<br />";
    foreach ($value as $info) {
        echo " - $info ";

        ;
    }
    echo "<br />";
}
?>
