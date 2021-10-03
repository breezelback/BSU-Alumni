<?php 
include "mysqliConnection.php";

$database = new Database;


if(isset($_POST['btnContactUs']))
{
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_message = $_POST['contact_message'];

    echo $sql = ' INSERT INTO `tbl_contact_us`(`contact_name`, `contact_email`, `contact_message`, `date_uploaded`) VALUES ( "'.$contact_name.'", "'.$contact_email.'", "'.$contact_message.'", NOW() ) ';
    $database->conn->query($sql);

    header('Location: ../contact.php?auth=success');
}

  
?>