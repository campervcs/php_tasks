<?php
function check($mass)
{
$login=$_POST["Login"]; 
$password=$_POST["Password"]; 
$lastName=$_POST["lastName"]; 
$age=$_POST["Age"];
$email=$_POST["email"];
$check=true;
if (!preg_match("/^[a-zA-Z0-9_\-.@]{6,24}$/", $login)) {
					$message="• Login is incorrect <br>";
    $check=false;
				}

if (!preg_match("/^[a-zA-Z0-9\-]{8,24}$/", $password)) {
					$message=$message."• Password is incorrect <br>";
    $check=false;
				}

if (!preg_match("/^[a-zA-Z]{2,50}$/", $lastName)) {
					$message=$message."• Your Name is incorrect <br>";
    $check=false;
				}
			
if (!preg_match("/^(([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9\-]+)\.[a-zA-Z0-9\-.]+$)/", $email)) {
					$message=$message."• Your email is incorrect <br>";
    $check=false;
				}	
if($check)
                    return "• Welcome!!";
    return $message;

}
if(check($mas)=="• Welcome!!") echo check($mas);
    else echo check($mas);

?>