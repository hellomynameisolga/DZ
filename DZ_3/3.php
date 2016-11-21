<?php
$arr=array();
for ($i=0; $i<=50; $i++)
{
    $arr[$i]=rand(1,100);
}
$fp=fopen('file.csv','w+');

    fputcsv($fp,$arr);

fclose($fp);


$data=file_get_contents('file.csv');
$sum=0;
foreach ($arr as $key => $chislo)
{
    if ($chislo%2 == 0)
{
    $sum=$sum+$chislo;
}
}
echo $sum;

?>

