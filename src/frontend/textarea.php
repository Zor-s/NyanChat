<!--TEXTAREA =======================================  -->
<?php 
require_once '../backend/sessionCheck.php';

if(isset($_GET['receiverId'])) {
    //* getting receiver data 
    $receiverId = $_GET['receiverId'];

    $userStmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $userStmt->bind_param('i', $receiverId);
    $userStmt->execute();
    $receiver = $userStmt->get_result()->fetch_assoc();

    $username = $receiver['username'];
    $status = $receiver['user_status'];
} else {
    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">assca
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!--  GOOGLE FONT ROBOTO  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <!--  FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- CUSTOME CSS -->
    <link rel="stylesheet" href="textarea.css">
    
</head>
<body>
    <div class="container">
       
        <div class="top"></div>
        <!--TEXTAREA -->    
        <div class="textarea">
            
            <div style="height:15px"></div>
            <!-- HEADER ================== -->
            <div class="header mb-2 d-flex align-items-center">
                <div class="col-2 d-grid justify-content-center">
                    <a href="dashboard.php">
                        <i class="fa-solid fa-arrow-left text-light" style="font-size: 1.5em"></i>
                    </a>
                </div>
                
                <div class="col-3" style="width: 60px">
                    <!-- PROFILE PICTURE-->
                    <img src="nyanchat1.jpeg" style="width: 40px; height:40px; border-radius: 50%">
                </div>
                
                <div class="col-6 d-grid">
                    <!-- PORFILE NAME-->
                    <p class="text-light mb-0"><?php echo $username ?></p>
                    <!-- STATUS (ONLINE/OFFLINE) -->
                    <p class="mb-0" style="color: #00ccff; font-size: .8em"><?php echo $status ?></p>
                </div>
                    
            </div>
            
            <!-- BODY ========================== -->
            <div class="body d-grid justify-content-center">
                <div class="interface">
                   
                <!-- USER1 -->
                <div class="d-flex justify-content-end">
                    <div class="user1 d-flex justify-content-end align-items-center">
                        <p class="text-light mt-3">
                            Hello! Welcome to Nyan Chat. How can I assist you today?
                        </p>
                    </div>
                </div>
                
                
                <!-- USER2-->
                <div class="user2 d-flex justify-content-start align-items-end">
                    <img src="nyanchat1.jpeg" alt="nyanchat">
                    &nbsp;
                    &nbsp;
                    <p class="text-light mt-3">
                        Hi! I want some Tea.
                    </p>
                </div>     
            </div>
            
            <!-- TEXTAREA NA GYUDD FINAL -->
            <form id="form" method="post">
                <div class="text__msg__area d-flex justify-content-center ">
                    <div class="typetxt d-flex justify-content-between align-content-center">
                        <textarea class="text-dark mt-3" name="message" id="message" cols="30" rows="1" style="resize: none;" oninput="autoExpand(this)"></textarea>

                        <!-- <button class="mt-3 send-btn">
                            <i class=" text-light fa-solid fa-paper-plane"></i>
                        </button> -->

                        <input type="hidden" name="receiverId" value="<?php echo $receiverId ?>">
                        <button type="submit" name="send" class="mt-3" id="send">
                            <i class="text-light fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>