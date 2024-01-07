<?php

class Database
{
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'nyanchat';

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function connect()
    {
        if ($this->conn->connect_error) {
            die('Connection Failed: ' . $this->conn->connect_error);
        } else {
            echo "Connected Succesfully!";
        }

        return $this->conn;
    }
}
?>