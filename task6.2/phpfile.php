<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<title>Project1</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_POST['out'])){
        setcookie("device", $_SESSION['device']);
        session_unset();
        session_destroy();
        header('Location:phpfile.php');
    }
     if (isset($_POST['res'])){
         $_SESSION['device']=0;
     }
    if (isset($_POST['device'])){
    if (isset($_SESSION['device'])){
    $_SESSION['device']++;
} else{
    $_SESSION['device']=0;
}
    }
    if (strcmp($_SESSION['login'],'admin')==0){
        
        $_SESSION['buy']=$_COOKIE['buy'];
        if (isset($_SESSION['count'])){
    $_SESSION['count']++;
} else{
    $_SESSION['count']=1;
}
         echo "Hi ".$_COOKIE['login']."<br>";
         echo " You was on this page ".$_SESSION['count']." times."."<br>";
         echo "Session name ".session_name()."."."<br>";
         echo "Session id ".session_id()."."."<br>";
         echo "Session save path ".session_save_path()."."."<br>";
         echo "Session encode ".session_encode()."<br>";
         echo "You have buy ".$_SESSION['device']; 
         echo '
         <form name="form1" method="post" action="">
         <div class="form-group">
             <div class="col-xs-offset-1 col-xs-2">
             <label> 
        <input type="submit" name="out" id="out" value="out" class="btn btn-default"> 
            </label> 
            <label> 
        <input type="submit" name="res" id="reset" value="reset" class="btn btn-default"> 
            </label> 
            <label> 
        <input type="submit" name="device" id="buy" value="buy" class="btn btn-default"> 
            </label> 
             </div >
        </div>
        </form> ';
    }else
{
echo '<form id="form" class="form-horizontal" method="POST">
        <div class="form-group">
<label for="length" class="col-xs-1 control-label">login</label>
            <div class="col-xs-2">
<input type="text" name="login" class="form-control" placeholder="login" required>
            </div>
            </div>
        <div class="form-group">
<label for="length" class="col-xs-1 control-label">password</label>
            <div class="col-xs-2">
<input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            </div>
         <div class="form-group">
             <div class="col-xs-offset-1 col-xs-2">
<button type="submit" id="btn" class="btn btn-default">Send</button>
             </div>
</form>';
}
    if (isset($_POST['login']) && isset($_POST['password'])) {
				if (strcmp($_POST['login'],'admin')==0 && strcmp($_POST['password'],'123')==0) {
                    $_SESSION['login']=$_POST['login'];
					setcookie('login', $_POST['login']);
                     $_SESSION['device']=$_COOKIE['device'];
                    header('Location:phpfile.php');
         
				} else {
					echo "Неправильный логин или пароль";
					unset($_COOKIE['login']);
				}

    } 
   
?>
     <div class="text"></div>
</body>
</html>
