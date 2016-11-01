<?php
for ($i=1; $i <11 ; $i++) {
    for ($j=1; $j <11 ; $j++) {
        $z=$i*$j;
        if (($i % 2)==1 && ($j % 2)==1) {
            echo (" [ $z ] &nbsp &nbsp &nbsp");}
        elseif (($i % 2)==0 && ($j % 2)==0) {
            echo (" ( $z ) &nbsp &nbsp &nbsp");}

       else {echo (" $z &nbsp &nbsp &nbsp");}}
    echo "<br/>";}
?>