<?php
$check=$_GET["check"];
$age_arr=array("детский","юный","молодой","средний","пожилой","старческий");
$rec=array("рекомендации для детей...","рекомендации для юных...","рекомендации для молодых...","рекомендации для среднего возраста...","рекомендации для пожилых...","рекомендации для старых...");
$arr["age"]=$age_arr[$check];
$arr["rec"]=$rec[$check];
echo json_encode($arr);

?>