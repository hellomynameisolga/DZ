<?php
$d="test.txt";
function open ($f)
{
$fp = fopen( "$f", "r" ) or die ( "Не удалось открыть файл" );
while ( ! feof ( $fp ) )
    echo ( fgets( $fp, 1024 ) )."<br>";
}
open ($d);
?>
