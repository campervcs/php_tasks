<?php

class User
{
    private $login;
    private $password;
    private $mail;

    function __construct($login, $password, $mail)
    {
        $this->login = $login;
        $this->password = $password;
        $this->mail = $mail;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPassword()
    {
        return $this->password;
    }

}
