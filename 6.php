<?php
$katalog=array($bmw['bmw'],$toyota['toyota'], $opel['opel']);
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
foreach ($katalog as $key => $value) {
	echo "brand = ".$key."<br />";
		foreach ($value as $info) {
		echo " - $info ";
	}
}
?>