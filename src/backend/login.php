<?php
session_start();
require '../db/database.php';

if (isset($_SESSION['id'])) {
    header('location: ../frontend/dashboard.php');
} else {
    $connect = DB::connect();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = validateUsername($username);
    $password = validatePassword($password);


    $stmt = $connect->prepare("SELECT * FROM users WHERE username = ?");

    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $hash = $row['password'];

        if (password_verify($password, $hash)) {

            $sql = "UPDATE users SET user_status = 'Online' WHERE user_id = {$row['user_id']};";
            $connect->query($sql);
            $_SESSION['id'] = $row['user_id'];

            header('location: ../frontend/dashboard.php');
        } else {
            header('location: ../frontend/login.php');
        }
    } else {
        header('location: ../frontend/login.php');
    }



    $stmt->close();
    $connect->close();
}



// Functions---------------------------------------------------------------------------------------------



// Validate and sanitize username
function validateUsername($username)
{
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    if (preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        return $username;
    } else {
        return false;
    }
}


// Validate and sanitize password
/*
At least 8 characters long
Contains at least one lowercase letter
Contains at least one uppercase letter
Contains at least one digit
*/
function validatePassword($password)
{
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
        // $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        return $password;
    } else {
        return false;
    }
}

?>