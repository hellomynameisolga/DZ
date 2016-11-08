<?php
$string="RX packets:950381 errors:0:) dropped:0 overruns:0 frame:0.";


function smile(){
header ("Content-type: image/png");
$im = imagecreatetruecolor(320, 320);
$ink = imagecolorallocate($im, 255, 255, 0);
$in = imagecolorallocate($im, 0, 0, 0);

imagefilledellipse($im,160,160,200,200,$ink);
imagefilledellipse($im,120,120,20,20,$in);
imagefilledellipse($im,200,120,20,20,$in);
imagearc($im,160,180,100,100,-10,180,$in);


imagepng($im);
imagedestroy($im);
}



function regular($str){
preg_match('~\d+~', $str, $m);
#var_dump($m[0]);
if ($m[0]>1000) {
	echo "Сеть есть";
	if (preg_match('~\:\)~', $str, $s)) {
		smile();
	}
}

}

regular($string);
?>