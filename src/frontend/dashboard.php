<!-- DASHBOARD ========================================================= -->
<?php 
require_once '../backend/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--  GOOGLE FONT ROBOTO  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <!--  FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- CUSTOM CSS -->
    <style>
        * {
            font-family: 'Roboto';
        }
        body {
            height: 100vh;
            background: linear-gradient(50deg, black,  #2b2b2b, #444444, #2b3d41 ,#2b2b2b, #444444, black);
            
        }
        .top{
            height: 60px;
        }
        .dashboard{
            background: linear-gradient(145deg, #323232, #3c3c3c);
            box-shadow:  18px 18px 36px #242424,
             -18px -18px 36px #4c4c4c;
            border-radius: 1vh;
            width: 350px;
            height: 70vh;
            
        }
        img[alt="nyanchat"]{
            width: 65px;
            height: 65px;
            border-radius: 50%;
            position: relative;
            left: 0;
        }
        .dash-header{
            height: 80px;
            width: 340px;
            border-bottom: 1px solid white;
        }
        .logout-button{
            border: 1px solid white;
            background: inherit;
            color: white;
            border-radius: 5px;
            transition: .2s; 
        }
        .logout-button:hover{
            border: none;
            background: white;
            color: black;
        }
        .dash-body{
            width: 340px;
            height: 57vh;
            overflow: hidden;
        }
        .interface{
            margin: 0;
            padding: 0;
            overflow-y: auto;
            height: 56vh;
        }
        .interface::-webkit-scrollbar {
            width: 0px; 
        }
        .interface::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
        .interface::-webkit-scrollbar-track {
            background-color: transparent; 
        }
       .searchbar input{
           width: 320px;
       }
       input[name="searchbar"]{
           width: 280px;
           height: 40px;
           border: none;
           background: inherit;
           outline: none;
           color: white;
           border-bottom: 0.5px solid gray;
       }
       .users{
           height: 60px;
           color: white;
           padding: 0 10px 0 10px;
       }
       .users img{
           width: 50px;
           height: 50px;
       }
       .profile-pic{
           width: 60px;
       }
       .users:hover{
           background: gray;
           border-radius: 1vh;
       }
       a{
           text-decoration: none;
       }
    </style>
    
</head>
<body>
    <div class="top"></div>
    <div class="container d-grid justify-content-center">
           
        <div class="dashboard d-grid justify-content-center">
            
            <div class="dash-header row d-flex mt-3 align-items-center">
                    <div class="col-3">
                        <!-- PROFILE PICTURE-->
                        <img src="nyanchat1.jpeg" alt="nyanchat">
                    </div>
                    
                    <div class="col-6 d-grid">
                        <!-- PORFILE NAME-->
                        <p class="text-light mb-0 fs-4"><?php echo $username ?></p>
                        <!-- STATUS (ONLINE/OFFLINE) -->
                        <p class="mb-0" style="color: #00ccff"><?php echo $status ?></p>
                    </div>

                    <div class="col-3 d-flex justify-content-end">
                        <!-- LOGOUT BUTTON -->
                        <a href="../backend/logout.php" onclick="return confirm('LOG OUT ACCOUNT?')">
                            <button class="logout-button d-flex align-items-center" name="logout" >
                                Logout&nbsp;
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </button>
                        </a>
                    </div>
            </div>
            
            <div class="dash-body d-grid row ">
                <div class="interface">
                    <!-- SEARCH BAR -->
                    <div class="searchbar mt-2 d-flex justify-content-center align-items-center">
                          <input type="text" name="searchbar" placeholder="Search an user to start chat"> 
                          &nbsp;<i class="fa-solid fa-magnifying-glass fs-3 text-light"></i>
                    </div>
                    
                    <div class="chats">
                        <!-- user chats here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>
