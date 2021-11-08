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
            "account_status" => "user",
            "date_register" => $_POST['currentDate'],
            "employment_status" => $_POST['employment_status'],
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
            $updateQuery = $database->conn->query("UPDATE user_information SET account_status='$status' WHERE id = $id");
            $database->conn->query($updateQuery);
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
            "company" => $_POST["company"],
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

    if($key == 'get_user_information') :
        $id = $_POST['id'];

        $sql = $database->conn->query("SELECT * FROM user_information WHERE id = $id");
        
        if($row = $sql->fetch_array()) {
            $data = array(
                'name' => $row['name'],
                'lastname' => $row['lastname'],
                'sr_code' => $row['sr_code'],
                'middle_name' => $row['middle_name'],
                'email_address' => $row['email_address'],
                'department' => $row['department'],
                'course' => $row['course'],
                'account_password' => $row['account_password'],
                'account_status' => $row['account_status'],
                'id' => $id
            );

            exit(json_encode($data));
        } else {
            exit('Queries not executed properly');
        }
    endif;

    if($key == 'get_alumni_information') :
        $id = $_POST['id'];

        $sql = $database->conn->query("SELECT `id`, `user_id`, `degree`, `program`, `year_graduated`, `masters_program`, `masters_school`, `name`, `age`, `gender`, `civil_status`, `address`, `is_employed`, `working_status`, `company_name`, `position`, `company_address`, `employment_status`, `status`, `date_uploaded` FROM `tbl_tracking` WHERE id = $id ");
        die();
        // if($row = $sql->fetch_array()) {
        //     $data = array(
        //         'user_id' => $row['user_id'],
        //         'degree' => $row['degree'],
        //         'program' => $row['program'],
        //         'year_graduated' => $row['year_graduated'],
        //         'masters_program' => $row['masters_program'],
        //         'masters_school' => $row['masters_school'],
        //         'name' => $row['name'],
        //         'age' => $row['age'],
        //         'gender' => $row['gender'],
        //         'civil_status' => $row['civil_status'],
        //         'address' => $row['address'],
        //         'is_employed' => $row['is_employed'],
        //         'working_status' => $row['working_status'],
        //         'company_name' => $row['company_name'],
        //         'position' => $row['position'],
        //         'company_address' => $row['company_address'],
        //         'employment_status' => $row['employment_status'],
        //         'status' => $row['status'],
        //         'date_uploaded' => $row['date_uploaded']
        //         'id' => $id
        //     );

        //     exit(json_encode($data));
        // } else {
        //     exit('Queries not executed properly');
        // }
    endif;



    if($key == 'get_job_information') :
        $id = $_POST['id'];

        $sql = $database->conn->query("SELECT * FROM jobs WHERE id = $id");

        if($row = $sql->fetch_array()) {
            $data = array(
                'title' => $row['title'],
                'company' => $row['company'],
                'salary' => $row['salary'],
                'description' => $row['description'],
                'id' => $id
            );

            exit(json_encode($data));
        } else {
            exit('Queries not executed properly');
        }
    
    endif;

    if($key == 'save_new_information') :

        $id = $_POST['id'];

        $userData = array(
            "name" => $_POST['name'],
            "lastname" => $_POST['lastname'],
            "middle_name" => $_POST['middlename'],
            "email_address" => $_POST['email_address'],
            // "mobile_number" => $_POST['mobile'],
            "department" => $_POST['department'],
            "course" => $_POST['course'],
            "sr_code" => $_POST['sr_number'],
            "account_password" => $_POST['password'],
            "account_status" => $_POST['status']
        );

        if($obj->updateAnyBool('user_information', $userData, $id)){
            exit("Update successfully");
        } else {
            exit("Update failed");
        }
    endif;

    if($key == 'save_edited_job') {
        $id = $_POST['id'];

        $userData = array(
            "title" => $_POST['title'],
            "company" => $_POST['company'],
            "description" => $_POST['description'],
            "salary" => $_POST['salary'],
        );

        if($obj->updateAnyBool('jobs', $userData, $id)){
            exit("Update successfully");
        } else {
            exit("Update failed");
        }
    }

    if($key == 'pie_for_job') :
    
    $employed = $database->conn->query('SELECT COUNT(id) as total_employed FROM user_information WHERE employment_status = "employed"');
    $unemployed = $database->conn->query('SELECT COUNT(id) as total_unemployed FROM user_information WHERE employment_status = "unemployed"');
    
    $total_employed = $employed->fetch_array();
    $total_unemployed = $unemployed->fetch_array();

    $dataPie = array(
        'employed' => $total_employed['total_employed'],
        'unemployed' => $total_unemployed['total_unemployed']
    );

    exit(json_encode($dataPie));
    endif;


    if($key == 'pie_for_user'): 
        $register = $database->conn->query('SELECT COUNT(id) as total_register FROM user_information WHERE account_status = "alumni"');
        $unregister = $database->conn->query('SELECT COUNT(id) as total_unregister FROM user_information WHERE account_status = "user"');
        
        $total_register = $register->fetch_array();
        $total_unregister = $unregister->fetch_array();
    
        $dataPie = array(
            'register' => $total_register['total_register'],
            'unregister' => $total_unregister['total_unregister']
        );
    
        exit(json_encode($dataPie));
    endif;



    
       


endif;

if(isset($_GET['get_key'])) :

    $get_key = $_GET['get_key'];

    if($get_key == 'update_profile') :

        // $name = $_GET['name'];
        // $lastname = $_GET['lastname'];
        // $middlename = $_GET['middlename'];
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        // $email_address = $_GET['email_address'];
        // $course = $_GET['course'];
        // $department = $_GET['department'];
        // $password = $_GET['password'];

        $data = array(
            'name' => $_GET['name'],
            'lastname' => $_GET['lastname'],
            'middle_name' => $_GET['middlename'],
            'email_address' => $_GET['email_address'],
            'course' => $_GET['course'],
            'department' => $_GET['department'],
            'account_password' => $_GET['password']
        );

        if($obj->updateAnyBool('user_information', $data, $id)){
            if($_FILES["file_add"]["name"] != ""){
                $test=explode(".", $_FILES["file_add"]["name"]);
                $extension = end($test);
                $image = $id.'_'.$image_name.'.'.$extension;
                $location = '../access/admin/profile_pic/'.$image;
                move_uploaded_file($_FILES["file_add"]["tmp_name"], $location);
        
                $query = "UPDATE user_information SET profile_pic='$image' WHERE id='$id'";
        
                if($database->conn->query($query)){
                    exit('Updated');
                } else {
                    exit($query);
                }
            }

        } else {
            exit('status '+$obj->updateAnyBool('user_information', $data, $id));
        }
        
        // $text_update="UPDATE user_in set news_title = '$news_title', news_desc = '$des' where id = '$news_id'";

    endif;

endif;



?>