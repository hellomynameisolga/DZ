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
$katalog=array('bmw'=>$bmw,'toyota'=> $toyota, 'opel'=> $opel);
foreach ($katalog as $key => $value) {
	echo "</br>";
	echo ("$key </br>") ;
		foreach ($value as $key => $info) {
		echo " - $info ";
		

	}
}
?>
