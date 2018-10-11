<?php

header('Content-type: application/json');

$Uang=145000;

$hasil=array();

$Pecahan1=$Uang/100000;
$sisa1=$Uang%100000;

array_push($hasil,array("pecahan 100.000"=>(int) $Pecahan1));

$Pecahan2=$sisa1/20000;
$sisa2=$sisa1%20000;

array_push($hasil,array("pecahan 20.000"=>(int) $Pecahan2));


$Pecahan3=$sisa2/5000;
$sisa3=$sisa2%5000;

array_push($hasil,array("pecahan 5.000"=>(int) $Pecahan3));


echo json_encode($hasil);

?>