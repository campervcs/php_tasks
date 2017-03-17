<?php
$login=$_POST["Login"]; 
$password=$_POST["Password"]; 
$lastName=$_POST["lastName"]; 
$age=$_POST["Age"];
$email=$_POST["email"];
if (preg_match("/^(([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9\-]+)\.[a-zA-Z0-9\-.]+$)/", $email, $match)) {
$message="Login= ".$login." "."Password = ".$password." "."Last name= ".$lastName." "."Age= ".$age." "."Email= ".$match[0];
echo json_encode($message);
} else echo ("ОШИБКА!")


?>