<?php 
include "mysqliConnection.php";
$database = new Database;



$key = $_POST['key'];

if ($key == 'post_comment') 
{
	$forum_comment = $_POST['forum_comment'];
	$forum_id = $_POST['forum_id'];
	$commentator_id = $_POST['commentator_id'];

	$sql = ' INSERT INTO `forum_comments`(`forum_comment`, `forum_id`, `commentator_id`, `date_uploaded`) VALUES ( "'.$forum_comment.'", '.$forum_id.', '.$commentator_id.', NOW() ) ';
	$database->conn->query($sql);
}

 ?>