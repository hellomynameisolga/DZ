<?php

$names = array (
	"bmw" => array("model"=>"X5",
								"speed"=>"120",
								"doors"=>"5",
								"year"=>"2015"),
	"toyota"=>array("model"=>"X1",
								"speed"=>"120",
								"doors"=>"3",
								"year"=>"2010"),
  	"opel"=>array("model"=>"X5",
  								"speed"=>"110",
  								"doors"=>"4",
  								"year"=>"2005"));
foreach ($names as $name) {
	
echo $names;

	echo "<br />";
	foreach ($name as $key) {
		echo " - $key ";
		  
			;
	}
	echo "<br />";
}
?>