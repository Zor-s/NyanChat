<?php 
require_once 'sessionCheck.php';

if(isset($_SESSION['id'])) {
    session_destroy();

    header('location: ../frontend/login.php');
} else {
    //go back
    //!use session here
    //$_SESSION['prevPage'] = $_SERVER['REQUEST_URI'];
}
?>