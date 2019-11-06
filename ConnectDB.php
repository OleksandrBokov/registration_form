<?php

/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 06.11.2019
 * Time: 9:40
 */
class ConnectDB
{

    public $pdo;

    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $db = 'form_registration';
    private $charset = 'utf8';
    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    public function connect()
    {
        $this->pdo = new PDO(
            "mysql:host=$this->host;dbname=$this->db;charset=$this->charset",
            $this->user,
            $this->password,
            $this->opt
        );
    }

    public function closeConnect()
    {
        $this->pdo = null;
    }
}