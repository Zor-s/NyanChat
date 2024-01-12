<?php 
require_once('../db/database.php');
session_start();

//* this code checks session['id'] if the user logged in if not, return to login page
if(isset($_SESSION['id']) === true) {
    $userId = $_SESSION['id'];

    $conn = DB::connect();

    $sql = $conn->prepare('SELECT * FROM users WHERE user_id = ?');
    $sql->bind_param('i', $userId);
    $sql->execute();
    $result = $sql->get_result();

    while($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $status = $row['user_status'];
    }

} else {
    header('location: ../frontend/login.php');
}
?>