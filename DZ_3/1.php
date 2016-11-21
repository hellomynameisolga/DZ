<?php
echo ('<table border="1px">');
$xml = simplexml_load_file('data.xml');

foreach ($xml->Address as $Adress){
    echo ("<tr>");
 echo ("<td width='150px'>$Adress->Name</td>");
 echo ("<td width='150px'>$Adress->Street</td>");
 echo ("<td width='150px'>$Adress->City</td>");
    echo ("<td width='150px'>$Adress->State</td>");
    echo ("<td width='150px'>$Adress->Zip</td>");
    echo ("<td width='150px'>$Adress->Country</td>");
    echo ("<td width='150px' bgcolor='#dc143c'>**************</td>");
    echo ("</tr>");
  }
echo ("</tr>");
foreach ($xml->Items->Item as $item){
    echo ("<tr>");
    echo ("<td width='150px' > $item->ProductName </td>");
    echo ("<td width='150px'> $item->Quantity </td>");
    echo ("<td width='150px'> $item->USPrice </td>");
    echo ("<td width='150px'> $item->Comment </td>");
    echo ("<td width='150px'> $item->ShipDate</td>");
    echo ("<td width='150px' bgcolor='#dc143c'>**************</td>");
    echo ("</tr>");
}
echo ("</tr>");
echo ('</table>')
 ?>

