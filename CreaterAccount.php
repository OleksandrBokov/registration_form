<?php

/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 06.11.2019
 * Time: 9:35
 */
class CreaterAccount
{
    private $login;
    private $email;
    private $password;

    public function __construct($login, $email, $password)
    {
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
    }
}