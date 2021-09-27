<?php 

include "mysqliConnection.php";
include "globalmethods.php";

$obj = new DataOperation;
$database = new Database;

if(isset($_POST["key"])) {
    $key = $_POST["key"];

    if($key == 'registerUser') :
        $message = "You are now register! Please wait to confirm your account by the admin. Thank you!";

        $userData = array(
            "name" => $_POST['firstname'],
            "lastname" => $_POST['lastname'],
            "middle_name" => $_POST['middlename'],
            "email_address" => $_POST['email'],
            "mobile_number" => $_POST['mobile'],
            "department" => $_POST['department'],
            "course" => $_POST['course'],
            "sr_code" => $_POST['sr_code'],
            "account_password" => $_POST['password'],
            "account_status" => "user"
        );

       // exit($userData);

        $obj->insertAny('user_information', $userData, $message);
    endif;

    if($key == 'post_forum') :

        $now = new DateTime();
        $current_date = $now->format('F j, Y');  
        

        $forumData = array(
            "topic" => $_POST["topic"],
            "description" => $_POST["description"],
            "admin_id" => $_POST["admin_id"],
            "date_created" => $current_date
        );


        $obj->insertAny('forum', $forumData, "The new topic is post successfully");
    
    endif;

}



?>