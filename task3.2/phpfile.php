<?php
$length=$_GET["length"]; 
$min=$_GET["low"]; 
$max=$_GET["hight"]; 
$check=$_GET["check"];
if ($min<$max&&$length>0){

for ($x=0; $x<$length; $x++){
	$arr[$x]=rand($min,$max);
}
$arr2["nonsort"]=$arr;
if($check=="frst")
sort($arr);
else
rsort($arr);
$arr2["sorted"]=$arr;
echo json_encode($arr2);
}
else echo 'ОШИБКА';

?>