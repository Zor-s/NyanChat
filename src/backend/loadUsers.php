<?php 
require 'sessionCheck.php';

$connect = DB::connect();

$sql = "SELECT * FROM users WHERE user_id != '{$userId}'";

if($results = $connect->query($sql)) {
    
    $output = '';

    if($results->num_rows <= 1) {

        $output = "<div class='mt-3 text-center text-white'>No Active Users</div>";

    } else {
        while($row = $results->fetch_assoc()) {
            $id = $row['user_id'];
            $username = $row['username'];
            $status = $row['user_status'];
    
            $output .= "<a href='chatarea.php?receiverId={$id}'>
                            <div class='users d-flex mt-3 d-flex align-items-center'>
                                <div class='col-3 profile-pic'>
                                    <img src='nyanchat1.jpeg' alt='nyanchat'>
                                </div>

                                <div class='col-8'>
                                    <p class='fs-5 text-light mb-0'>
                                        {$username}
                                    </p>
                                    <p class='text-light mb-0'>
                                        Click me to message
                                    </p>
                                </div>
                                
                                <div class='col-2 d-flex justify-content-center'>
                                    <!-- COLOR GREEN IS FOR ONLINE STATUS-->
                                    <i style='color:{ ($status == 'Online') ? #00c100 : #808080 }' class='fa-solid fa-circle'></i>
                                </div>
                            </div>
                        </a>";
        }
    }

    echo $output;
}
else {
    echo 'Query Error!';
}
?>