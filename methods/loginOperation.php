<?php 
include "mysqliConnection.php";

$database = new Database;


if(isset($_POST['srcode']) && isset($_POST['password'])) : 

    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['srcode']);
    $password = validate($_POST['password']);

    if(empty($username)) {
        header("Location: ../login.php?error=Username is required");
        exit();
    } elseif(empty($password)) {
        header("Location: ../login.php?error=Password is required");
        exit();
    } else {
        $query = "SELECT * FROM user_information WHERE sr_code='$username' AND account_password='$password'";
        $res = $database->conn->query($query);
    }

    if($res->num_rows === 1) {

        $row = $res->fetch_array();
        if($row['sr_code'] === $username && $row['account_password'] === $password) {
            session_start();

            if($row['account_status'] === 'admin') {
                $_SESSION['sr_code'] = $row['sr_code'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['account_type'] = $row['account_status'];
                    header("Location: ./../access/admin/index.php");
                exit();
            }

        }
    }

endif;

?>