<?php 

include "mysqliConnection.php";
include "globalmethods.php";
include "PHPMailer.php";

$obj = new DataOperation;
$database = new Database;
$mailer = new Mailer;

if(isset($_POST["key"])) :
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

    if($key == 'updateAccountStatus') : 

        $id = $_POST["id"];
        $status = $_POST["status"];

        $sql = "SELECT * FROM user_information WHERE id = $id";
        $query = $database->conn->query($sql);
        $row = $query->fetch_array();
        $fullname = $row['name']. " " .$row['lastname'];

        if(filter_var($row['email_address'], FILTER_VALIDATE_EMAIL)) {
            // $updateQuery = $database->conn->query("UPDATE user_information SET account_status='$status' WHERE id = $id");
           //exit("UPDATE user_information SET account_status = '$status' WHERE id = $id");
            // if($updateQuery) {

                if($mailer->sendEmail($row['email_address'], $fullname)) {
                    exit("Account status is updated");
                } else {
                    exit("Failed to update maybe the stm server is down, please try again!");
                }
            // }

        } else {
            exit("This email has invalid format");
        }

    endif;

    if($key == 'request_srcode') :

        $message = "Request successfully sent. Please wait for the email of the admin";
        $now = new DateTime();
        $now->setTimezone(new DateTimeZone('Asia/Manila'));
        // exit($now->format('j-m-Y, g:i a'));  

        $request = array(
            "name" => $_POST['firstname'],
            "lastname" => $_POST['lastname'],
            "middlename" => $_POST['middlename'],
            "email" => $_POST['email'],
            "mobile_no" => $_POST['mobile'],
            "address" => $_POST['address'],
            "department" => $_POST['department'],
            "course" => $_POST['course'],
            "date_request" => $now->format('j-m-Y')
        );


        $obj->insertAny('sr_request', $request, $message);
    endif;

    if($key == 'get_selected') :
        $id = $_POST["id"];

        $sql = "SELECT * FROM sr_request WHERE id = $id";
        $query = $database->conn->query($sql);
        // $row = $query->fetch_array();

        if($row = $query->fetch_array()) {
            $data = array(
                "email" => $row["email"],
                "fullname" => $row["name"]. " ".$row["lastname"]
            );

            exit(json_encode($data));
        } else {
            exit($sql);
        }
    endif;

    if ($key == 'send_sr_code') :
        $email = $_POST['email'];
        $srCode = $_POST['srCode'];
        $fullname = $_POST['name'];
        $id = $_POST['id'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // exit()

            if($mailer->sendSrCode($srCode, $email, $fullname)) {
                $sql = "DELETE FROM sr_request WHERE id = $id";
                $query = $database->conn->query($sql);
                if($query) {
                    exit('SR code send successfully');
                } else {
                    exit($sql);
                }
            } else {
                exit('Failed to send, Please try again');
            }
        } else {
            exit("This email has invalid format");
        }

    endif;

    if($key == 'post_job') :
        $now = new DateTime();
        $current_date = $now->format('F j, Y');  
        

        $jobs = array(
            "title" => $_POST["job_title"],
            "description" => $_POST["job_description"],
            "admin_id" => $_POST["admin_id"],
            "salary" => $_POST["job_salary"],
            "date_posted" => $current_date
        );


        $obj->insertAny('jobs', $jobs, "The new job is post successfully");
    

    endif;

    if($key == 'del_image') :
        $id = $_POST['image_id'];
        $file_path = '../access/admin/gallery/' . $_POST["image_name"];
        // exit($id);

        if(unlink($file_path))
        {
            $sql = "DELETE FROM gallery WHERE id = $id";
            $query = $database->conn->query($sql);
            if($query) {
                exit('Image deleted');
            } else {
                exit($sql);
            }
        }

    endif;

    if($key == 'del_job') :
        $id = $_POST['id'];

        $sql = "DELETE FROM jobs WHERE id = $id";
        $query = $database->conn->query($sql);
        if($query) {
            exit('Job deleted');
        } else {
            exit($sql);
        }
    endif;

    if($key == 'del_user') :
        $id = $_POST['id'];

        $sql = "DELETE FROM user_information WHERE id = $id";
        $query = $database->conn->query($sql);
        if($query) {
            exit('User deleted');
        } else {
            exit($sql);
        }
    endif;

endif;



?>