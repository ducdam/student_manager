<?php

class DBConnect
{
    public $userName;
    public $userPassword;
    public $dsn;

    public function __construct()
    {
        $this->userName = "root";
        $this->userPassword = "1";
        $this->dsn = 'mysql:host=localhost;dbname=student_manager';
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, $this->userName, $this->userPassword);
        } catch (PDOException $exception) {
            echo 'Connection failed: ' . $exception->getMessage();
        }
        return $conn;
    }
}