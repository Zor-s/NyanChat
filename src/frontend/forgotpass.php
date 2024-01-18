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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <style>
        * {
            font-family: 'Roboto';
        }

        body {
            height: 100vh;
            background: linear-gradient(50deg, black, #2b2b2b, #444444, #2b3d41, #2b2b2b, #444444, black);
        }

        .login-form {
            width: 330px;
            height: 510px;
            background: inherit;
            border-radius: 10px;
            border: solid 1px white;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(25px);
        }
        
        @media screen and (max-width: 329px) {
            .login-form {
                width: 230px;
            }
        }

        img[alt="nyanchat"] {
            position: relative;
            left: 25%;
            width: 130px;
            height: 130px;
        }

        .input-field {
            background: inherit;
            
        }


        .top {
            height: 100px;
        }

        button{
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="top"></div>
    <div class="container d-grid justify-content-center">
        <div class="login-form d-grid justify-content-center align-items-center">
            <img src="nyan.png" alt="nyanchat">

            <!-- CHANGE PASSWORD FORM -->
            <form action="../backend/login.php" method="post">
                
                <!-- EMAIL -->
                <div class="form-floating mb-3 input-field">
                    <input type="email" name="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">
                        <i class="fa-solid fa-at"></i>
                        &nbsp;
                        Email
                    </label>
                </div>
                
                <!-- USERNAME -->
                <div class="form-floating mb-3 input-field">
                    <input type="text" name="username" class="form-control" id="floatingInput"
                        placeholder="name@example.com" required>
                    <label for="floatingInput">
                        <i class="fa-solid fa-user"></i>
                        &nbsp;
                        Username
                    </label>
                </div>

                <!-- NEW PASSWORD -->
                <div class="form-floating mb-3 input-field">
                    <input type="password" name="new-password" class="form-control" id="floatingPassword"
                        placeholder="Password" required>
                    <label for="floatingPassword">
                        <i class="fa-solid fa-key"></i>
                        &nbsp;
                        New Password
                    </label>
                </div>
                
                <!-- CONFIRM NEW PASSWORD -->
                <div class="form-floating mb-3 input-field">
                    <input type="password" name="confirm-password" class="form-control" id="floatingPassword"
                        placeholder="Password" required>
                    <label for="floatingPassword">
                        <i class="fa-solid fa-key"></i>
                        &nbsp;
                        Confirm Password
                    </label>
                </div>

                <!-- SUBMIT BUTTON-->
                <div class="mb-5 submit-button">
                    <button class="btn btn-primary" name="change-password">
                        Change Password
                    </button>
                </div>
            </form>
            
        </div>
    </div>



</body>

</html>