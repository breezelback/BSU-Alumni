<?php 
include "mysqliConnection.php";
$database = new Database;

if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    session_start(); //do this
}

$forumId = $_POST['forumId'];
$commentatorId = $_SESSION['id'];
$commentatorType = $_SESSION['account_type'];

$sql = ' SELECT forum_comments.id AS id,
			 forum_comments.forum_comment AS forum_comment,
			 forum_comments.forum_id AS forum_id,
			 forum_comments.commentator_id AS commentator_id,
			 forum_comments.status AS status,
			 DATE_FORMAT(forum_comments.date_uploaded, " %h:%i %p %M %d, %Y") AS date_uploaded,
			 user_information.id AS user_id,
			 user_information.name AS user_name,
			 user_information.lastname AS user_lastname,
			 user_information.middle_name AS user_middle_name 
			 FROM forum_comments 
			 JOIN user_information ON forum_comments.commentator_id = user_information.id  WHERE forum_id = '.$forumId.' ORDER BY id DESC ';
$exec = $database->conn->query($sql);
while ($row = $exec->fetch_assoc()) 

{ ?>

	<li class="mb-5" style="border-bottom: 0.5px solid darkgrey;">
		<div class="comment-area-box">
			<!-- <img alt="" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2"> -->

			<h5 class="mb-1"><?php echo $row['user_name'].' '.$row['user_lastname']; ?></h5>
			<span><?php echo strtoupper($commentatorType); ?></span>

			<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
				<!-- <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a> -->
				<span class="date-comm">Posted <?php echo $row['date_uploaded']; ?> </span>
			</div>

			<div class="comment-content mt-3">
				<p> <?php echo $row['forum_comment']; ?> </p>
			</div>
		</div>
	</li>

<?php } ?>