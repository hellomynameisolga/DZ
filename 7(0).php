<?php  
for ($i=1; $i <11 ; $i++) { 
	for ($j=1; $j <11 ; $j++) { 
		$z=$i*$j;
			if (($i % 2)==1 && ($j % 2)==1) {
			echo ("[ $z ] \n").PHP_EOL;}
			elseif (($i % 2)==0 && ($j % 2)==0) {
				echo ("( $z )\n");}
			}
		{
				echo ("$z \n"); 
			}
		
}
echo ("<br/>");
?>