<?php
require '../db/database.php';


$database = new Database();
$database->connect();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$userStatus = $_POST['user-status'];

echo '<br>';
echo '<b>Username:</b> ' . validateUsername($username) . ' <b>Password:</b> ' . validatePassword($password) . ' <b>Email:</b> ' . validateEmail($email);
echo '<br>';


if (!validateUsername($username)) {
    echo 'error!';
} elseif (!validatePassword($password)) {
    echo 'error!';
} elseif (!validateEmail($email)) {
    echo 'error!';
} else {
    $username = validateUsername($username);
    $email = validateEmail($email);
    $password = validatePassword($password);

    $stmt = $database->conn->prepare("INSERT INTO users (username, email, password, user_status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $userStatus);
    $result = $stmt->execute();

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }




    header('location: ../frontend/dashboard.php');
    // Close prepared statement and database connection
    $stmt->close();
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

// Validate and sanitize email
function validateEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
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
        $options = [
            'cost' => 12,
        ];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        return $hashedPassword;
    } else {
        return false;
    }
}

$database->conn->close();
?>