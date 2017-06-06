<?php

/**
 * Created by PhpStorm.
 * User: Доктор кто
 * Date: 06.06.2017
 * Time: 2:10
 */
class Connection
{
public static function getConnection(){
    $mysqli = new mysqli('localhost', 'root', 'root', 'authorization',8889);
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: " . mysqli_connect_error();
    }
    return $mysqli;
}
}