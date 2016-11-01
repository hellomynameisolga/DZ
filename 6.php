<?php
$bmw["bmw"]=array("model"=>"X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015");
$toyota["toyota"]=array("model"=>"X1",
    "speed"=>"120",
    "doors"=>"3",
    "year"=>"2010");
$opel["opel"]=array("model"=>"X5",
    "speed"=>"110",
    "doors"=>"4",
    "year"=>"2005");
$array = array_merge($bmw, $toyota, $opel);
print_r($array);
echo "<br />";
foreach ($array  as $key=>$value) {

    echo $key;

    echo "<br />";
    foreach ($value as $info) {
        echo " - $info ";

        ;
    }
    echo "<br />";
}
?>
