<?php
$string="RX packets:950381 errors:0:) dropped:0 overruns:0 frame:0.";


function smile()
{
echo "¯\_(ツ)_/¯";
}



function regular($str)
{
preg_match('~\d+~', $str, $m);
#var_dump($m[0]);
if (preg_match('~\:\)~', $str, $s))
    	{
	smile();
	return;
	}
if ($m[0]>1000) 
        {
	echo "Сеть есть";
	}

}

regular($string);
?>