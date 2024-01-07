<?php 
require_once('../db/database.php');

$db = new Database();

$sql = 'SELECT * FROM users'; //! exclude the current user later

if($results = $db->connect()->query($sql)) {

    $output = '';

    while($row = $results->fetch_assoc()) {
        $fname = $row['firstname'];
        $lname = $row['lastname'];

        //!can't work without, login
    }

    echo $output;
}
else {
    echo 'Query Error!';
}
?>