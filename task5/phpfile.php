<?php
$login=$_POST["Login"]; 
$password=$_POST["Password"]; 
$lastName=$_POST["lastName"]; 
$age=$_POST["Age"];
$email=$_POST["email"];
$check=true;
if (!preg_match("/^[a-zA-Z0-9_\-.@]{6,24}$/", $login)) {
					echo "• Login is incorrect <br>";
    $check=false;
				}

if (!preg_match("/^[a-zA-Z0-9\-]{8,24}$/", $password)) {
					echo "• Password is incorrect <br>";
    $check=false;
				}

if (!preg_match("/^[a-zA-Z]{2,50}$/", $lastName)) {
					echo "• Your Name is incorrect <br>";
    $check=false;
				}
			
if (!preg_match("/^(([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9\-]+)\.[a-zA-Z0-9\-.]+$)/", $email)) {
					echo "• Your email is incorrect <br>";
    $check=false;
				}	
if($check)
    echo "• Welcome!!"


?>