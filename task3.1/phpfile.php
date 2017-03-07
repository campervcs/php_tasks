<?php
$length=$_GET["length"]; 
$min=$_GET["low"]; 
$max=$_GET["hight"]; 
if ($min<$max&&$length>0){

for ($x=0; $x<$length; $x++){
	$arr[$x]=rand($min,$max);
}
$arr2["nonsort"]=$arr;
sort($arr);
$arr2["sorted"]=$arr;
echo json_encode($arr2);
}
else echo 'ОШИБКА';

?>