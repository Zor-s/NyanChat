<?php 
require_once 'sessionCheck.php';

if(isset($_SESSION['id'])) {

    $conn = DB::connect();

    $sql = $conn->prepare("UPDATE users SET user_status = 'Offline' WHERE user_id = ?");
    $sql->bind_param('i', $userId);
    $sql->execute();

    session_destroy();

    header('location: ../frontend/login.php');
} else {
    //go back
    //!use session here
    //$_SESSION['prevPage'] = $_SERVER['REQUEST_URI'];
}
?>