<?php 
require 'sessionCheck.php';

if(isset($_POST['receiverId'])) {
    $senderId = $_POST['senderId'];
    $receiverId = $_POST['receiverId'];

    $connect = DB::connect();

    $sql = $connect->prepare("SELECT * FROM messages WHERE (sender_id = ? AND receiver_id = ?) OR (sender_id = ? AND receiver_id = ?)");
    $sql->bind_param('iiii',  $senderId, $receiverId, $receiverId, $senderId);
    $sql->execute();
    $result = $sql->get_result();

    if($result->num_rows > 0) {
        $out = '';
        
        while($row = $result->fetch_assoc()) {
            $sender = $row['sender_id'];
            $receiver = $row['receiver_id'];
            $message = $row['message'];


            $message = wordwrap($message, 30, "<br />", true);
            if($senderId == $sender) {
                $out .= "<div class='d-flex justify-content-end'>
                    <div class='user1 d-flex justify-content-end align-items-center'>
                        <p class='text-light mt-3 px-3'>
                            {$message}
                        </p>
                    </div>
                </div>";
            } 
            else {
                $out .= " <div class='user2 d-flex justify-content-start align-items-end'>
                    <img src='nyan1.jpeg' alt='nyanchat'>
                    &nbsp;
                    &nbsp;
                    <p class='text-light mt-3'>
                        {$message}
                    </p>
                </div> ";
            }
        }
    } else {
        $out = '';
        $out .= "<div class='mt-3 text-center text-white'>Send message now</div>";
    }

    echo $out;
}
?>