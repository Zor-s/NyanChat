<!--TEXTAREA =======================================  -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
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
                    <p class="text-light mb-0">Nyan Area</p>
                    <!-- STATUS (ONLINE/OFFLINE) -->
                    <p class="mb-0" style="color: #00ccff; font-size: .8em">Active now</p>
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
            <div class="text__msg__area d-flex justify-content-center">
                <div class="typetxt d-flex justify-content-between align-content-center">
                    <textarea class="text-light mt-3" name="your_name" id="your_id" cols="30" rows="1" style="resize: none;" oninput="autoExpand(this)"></textarea>
                   
                        <button class="mt-3">
                        <i class=" text-light fa-solid fa-paper-plane"></i>
                        </button>
                    
                </div>
            </div>
            </div>
             
            
        </div>
        
    </div>
    
    <script>
  function autoExpand(element) {
    element.style.height = "auto";
    element.style.height = (element.scrollHeight > 60 ? 60: element.scrollHeight) + "px";
  }
</script>
</body>
</html>