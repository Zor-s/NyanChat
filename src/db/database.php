<?php

class DB
{
    public static function connect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'nyanchat';
    
        $conn  = new mysqli($servername, $username, $password, $dbname);
          
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }

        return $conn;
    }
}
?>