<?php 
include "mysqliConnection.php";
$database = new Database;

if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    session_start(); //do this
}

$key = $_POST['key'];

if ($key == 'post_comment') 
{
	$forum_comment = $_POST['forum_comment'];
	$forum_id = $_POST['forum_id'];
	$commentator_id = $_POST['commentator_id'];

	$sql = ' INSERT INTO `forum_comments`(`forum_comment`, `forum_id`, `commentator_id`, `date_uploaded`) VALUES ( "'.$forum_comment.'", '.$forum_id.', '.$commentator_id.', NOW() ) ';
	$database->conn->query($sql);
}

else if ($key == 'update_account')
{
	$update_name = $_POST['update_name'];
	$update_middlename = $_POST['update_middlename'];
	$update_lastname = $_POST['update_lastname'];
	$update_email = $_POST['update_email'];
	$update_number = $_POST['update_number'];
	$update_dpartment = $_POST['update_dpartment'];
	$update_course = $_POST['update_course'];

	$sql = ' UPDATE `user_information` SET `name`= "'.$update_name.'",`lastname`= "'.$update_lastname.'",`middle_name`= "'.$update_middlename.'",`email_address`= "'.$update_email.'",`department`= "'.$update_dpartment.'",`mobile_number`= "'.$update_number.'",`course`= "'.$update_course.'" WHERE `id` = '.$_SESSION['id'].' ';
	$database->conn->query($sql);
}

else if ($key == 'update_password')
{
	$update_password = $_POST['update_password'];

	$sql = ' UPDATE `user_information` SET `account_password`= "'.$update_password.'" WHERE `id` = '.$_SESSION['id'].' ';
	$database->conn->query($sql);
}




 ?>