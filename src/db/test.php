<?php 
require_once('database.php');

$db = new Database();

echo $db->connect();
?>