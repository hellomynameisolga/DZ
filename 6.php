<?php
$brand["bmw"]=array("model"=>"X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015");
$brand["toyota"]=array("model"=>"X1",
    "speed"=>"120",
    "doors"=>"3",
    "year"=>"2010");
$brand["opel"]=array("model"=>"X5",
    "speed"=>"110",
    "doors"=>"4",
    "year"=>"2005");
$array = array_merge_recursive($brand);
print_r($array);
echo "<br />";
foreach ($brand  as $key=>$value) {

    echo $key;

    echo "<br />";
    foreach ($value as $info) {
        echo " - $info ";

        ;
    }
    echo "<br />";
}
?>
