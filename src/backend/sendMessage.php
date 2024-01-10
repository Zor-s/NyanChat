<?php 
require_once('sessionCheck.php');

if(isset($_POST['receiverId'])) {

    $senderId = $_POST['senderId'];
    $receiverId = $_POST['receiverId'];
    $message = $_POST['message'];

    $connect = DB::connect();

    $sql = $connect->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?,?,?)");
    $sql->bind_param('iis', $senderId, $receiverId, $message);
    
    if(!$sql->execute()) {
        echo 'Query Error!';
    }
} else {
    header('location: dashboard.php');
}
?>