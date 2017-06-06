<?php
include_once('../models/dao/DAO.php');
include_once('../models/User.php');
//include_once('../connections/mysqlConnection/Connection.php');

class UserDAOImpl implements DAO
{

    function __construct()
    {
    }

    public function insertUser(User $User)
    {
        $mysqli=Connection::getConnection();
        $date="'".date("m-d-y h:I:s")."'";
        $query = "INSERT INTO users (login,pass,mail,date)
       VALUES ($User->getLogin(),$User->getPassword(),$User->getMail(),$date)";

        $result = $mysqli->query($query);
        $mysqli->commit(); //??
        $mysqli->close();
    }

    public function findUser($login)
    {
        /*$mysqli=Connection::getConnection();*/
        $mysqli = new mysqli('localhost', 'root', 'root', 'authorization',8889);
        if (mysqli_connect_errno()) {
            echo "Подключение невозможно: " . mysqli_connect_error();
        }
        $query = "SELECT * FROM users WHERE login='$login'";
        $result_set = $mysqli->query($query);
        $row = $result_set->fetch_assoc();
        $user = new User($row['login'], $row['pass'], $row['mail']);
        $result_set->close();
        $mysqli->close();
        return $user;
    }

}

