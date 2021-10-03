<?php 
include "mysqliConnection.php";
$database = new Database;

if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    session_start(); //do this
}

$forumId = $_POST['forumId'];
$commentatorId = $_SESSION['id'];
$commentatorType = $_SESSION['account_type'];

$sql = ' SELECT COUNT(id) AS totalComments FROM forum_comments WHERE forum_id = '.$forumId.' ';
$exec = $database->conn->query($sql);
$row = $exec->fetch_assoc();
echo $row['totalComments'].' Comments';
?>