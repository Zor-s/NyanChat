<?php 

class Database {
    private $servername = 'localhost';
    private $username  = 'root';
    private $password = '';
    private $dbname = 'nyanchat';

    public function connect() {
        global $servername, $username, $password, $dbname;

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        } 

        return $conn;
    }
}
?>