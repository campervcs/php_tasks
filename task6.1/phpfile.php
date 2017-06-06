<?php
session_start();

if (isset($_SESSION['count'])){
    $_SESSION['count']++;
} else{
    $_SESSION['count']=1;
}
$_SESSION['name']=$_POST['name'];
$name="Hi ".$_SESSION['name'];
$count=" You was on this page ".$_SESSION['count']." times.";
$session_name="Session name ".session_name().".";
$session_id="Session id ".session_id().".";
$session_save_path="Session save path ".session_save_path().".";
$session_encode="Session encode ".session_encode();
$arr['name']=$name;
$arr['count']=$count;
$arr['session_name']=$session_name;
$arr['session_id']=$session_id;
$arr['session_save_path']=$session_save_path;
$arr['session_encode']=$session_encode;
/*Hi ".$_SESSION['name']." You was on this page ".$_SESSION['count']." times. Session name ".session_name().". Session id ".session_id().".   Session save path ".session_save_path().". Session encode ".session_encode()*/
echo json_encode($arr);
?>