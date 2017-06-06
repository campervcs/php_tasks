<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Project</title>
</head>
<body>
<h1>Регистрация</h1>
<form id="form" class="form-horizontal" method="post">
    <div class="form-group">
        <label for="hight" class="col-xs-1 control-label">Login</label>
        <div class="col-xs-2">
            <input type="text" name="Login" id="hight" class="form-control" placeholder="highest value" required>
        </div>
    </div>
    <div class="form-group">
        <label for="hight" class="col-xs-1 control-label">Password</label>
        <div class="col-xs-2">
            <input type="password" name="Password" id="hight" class="form-control" placeholder="highest value" required>
        </div>
    </div>
    <div class="form-group">
        <label for="hight" class="col-xs-1 control-label">email</label>
        <div class="col-xs-2">
            <input type="email" name="email" id="hight" class="form-control" placeholder="highest value" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-xs-2">
            <button type="submit" id="btn" class="btn btn-default">Send</button>
        </div>
    </div>
</form>
<?php
include_once('../models/daoImpl/UserDAOImpl.php');
$login = $_POST["Login"];
$password = $_POST["Password"];
$email = $_POST["email"];
$check = true;
if (!preg_match("/^[a-zA-Z0-9_\-.@]{5,24}$/", $login)) {
    echo "• Login is incorrect <br>";
    $check = false;
}

if (!preg_match("/^[a-zA-Z0-9\-]{8,24}$/", $password)) {
    echo "• Password is incorrect <br>";
    $check = false;
}
if (!preg_match("/^(([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9\-]+)\.[a-zA-Z0-9\-.]+$)/", $email)) {
    echo "• Your email is incorrect <br>";
    $check = false;
}
if ($check) {
    $dao = new UserDAOImpl();
    $user = $dao->findUser($login);
    $log=$user->getLogin();
    echo $log;
    if (!isset($log)) {
        echo "УСПЕХ!";
        $newUser=new User($login,$password,$email);
        $dao->insertUser($newUser);
    } else echo "Пользователь уже существует!";
}

?>
</body>
</html>