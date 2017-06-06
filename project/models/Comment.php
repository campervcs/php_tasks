<?php

class Comment
{
    private $text;
    private $user_id;

    function __construct($text,$user_id)
    {
    $this->user_id=$user_id;
    $this->text=$text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}