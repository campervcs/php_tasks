<?php

interface DAO
{
    public function insertUser(User $User);

    public function findUser($login);
}