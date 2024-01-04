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

<style>
* {
   font-family: 'Roboto';
}
body {
    height: 100vh;
    background: linear-gradient(50deg, black,  #2b2b2b, #444444, #2b3d41 ,#2b2b2b, #444444, black);
}
.login-form {
    width: 330px;
    height: 470px;
    background: linear-gradient(180deg, rgba(0,106,132, 0.7), rgba(110,110,110, 0.5));
    border-radius: 2vh;
    
}
img[alt="nyanchat"] {
    position: relative;
    left: 25%;
    width: 130px;
    height: 130px;
}
.input-field{
    background: inherit;
}

.break-line{
    width: 100%;
    border: 0.5px solid white;
}
.submit-button button {
    width: 100%;
}
.register-button button {
    width: 100%;
}

    
 #btn-signup-modal{
     background: inherit;
     border: 1px solid white;
     height: 35px;
     color: white;
     border-radius: 1vh;
     transition: .2s;
 }   
 #btn-signup-modal:hover{
     background: #343434;
     color: ;
     border: #343434 solid 1px;
 }

/* FOR MODAL */
.modal-box {
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
}
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  opacity: 0;
  pointer-events: none;
  z-index: 2;
}
.modal-box {
  position: fixed;
  border-radius: 2vh;
  background: linear-gradient(180deg, rgb(0,106,132), rgb(110,110,110));;
  display: flex;
  flex-direction: column;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
  transform: translate(-50%, -50%) scale(1.2);
  z-index: 3;
  width: 350px;
}
.conts.active .overlay {
  opacity: 1;
  pointer-events: auto;
}
.conts.active .modal-box {
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}
.top{
    height: 100px;
}
.close-btn{
  position: absolute;
  left: 0;
  top: 0;
  background: none;
  border: none;
  text-align: right;
  font-size: 1.5em;
}

</style>
</head>

<body>
    
     <div class="top"></div>
    <div class="container d-grid justify-content-center">
        <div class="login-form d-grid justify-content-center align-items-center">
            <img src="nyanchat.png" alt="nyanchat">
            
            <!-- LOGIN FORM -->
            <form action="">
                
                <!-- USERNAME -->
                <div class="form-floating mb-3 input-field">
                  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput" >
                      <i class="fa-solid fa-user"></i>
                      &nbsp;
                      Username
                  </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="form-floating mb-3 input-field">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">
                      <i class="fa-solid fa-key"></i>
                      &nbsp;
                      Password
                  </label>
                </div>
                
                <!-- SUBMIT BUTTON-->
                <div class="mb-4 submit-button" >
                    <button class="btn btn-primary" name="login"> 
                        Login
                    </button>
                </div>
            </form>
            
            <span class="mb-3 break-line"></span>
            <p class="text-light text-center">Don't have an account?</p>
            
            <!-- SIGN-UP BUTTON / SHOW MODAL-->
            <div class="mb-5 conts register-button">
                
                <span class="show-modal">
                    <button id="btn-signup-modal">
                        Sign-up!
                    </button>
                </span>
                
                <span class="overlay"></span>
                
                <!-- MODAL BOX -->
                <div class="modal-box d-grid justify-content-center">
                    <!-- CLOSE MODAL BUTTON -->
                    <div class="d-flex justify-content-end">
                        <button class="close-btn">
                            <i class="fa-solid fa-xmark text-light"></i>
                        </button>
                    </div>
                    
                    <p class="text-light fs-3 text-center">SIGN UP ACCOUNT</p>
                   <form action="">
                    <!-- EMAIL -->
                    <div class="form-floating mb-3 input-field">
                      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">
                          <i class="fa-solid fa-at"></i>
                          &nbsp;
                          Email
                      </label>
                    </div>
                    
                    <!-- USERNAME -->
                    <div class="form-floating mb-3 input-field">
                      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">
                          <i class="fa-solid fa-user"></i>
                          &nbsp;
                          Username
                      </label>
                    </div>
                
                    <!-- PASSWORD -->
                    <div class="form-floating mb-3 input-field">
                      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">
                          <i class="fa-solid fa-key"></i>
                          &nbsp;
                          Password
                      </label>
                    </div>
                    
                    <!-- SIGN-UP BUTTON-->
                    <div class="mb-2 submit-button">
                        <button class="btn btn-primary" name="signup">
                            Sign-up
                        </button>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        const conts = document.querySelector('.conts'),
        overlay = document.querySelector('.overlay'),
        showModalBtn = document.querySelector('.show-modal'),
        closeBtn = document.querySelector('.close-btn');
        
        showModalBtn.addEventListener("click", () => conts.classList.add('active'));
        overlay.addEventListener("click", () => conts.classList.add('active'));
        closeBtn.addEventListener("click", () => 
        conts.classList.remove('active'));
    </script>

</body>
</html>