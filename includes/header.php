<?php 
if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    session_start(); //do this
}
require 'methods/mysqliConnection.php'; 
$database = new Database;
?>
<header class="navigation">
	<nav class="navbar navbar-expand-lg py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.php">
		  	<img src="images/logo1.png" alt="" width="25"> <span>BSU Malvar</span> A.T.M.S.
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			   <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
				   <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
				   <li class="nav-item"><a class="nav-link" href="forums.php">Forum</a></li>
				   <li class="nav-item"><a class="nav-link" href="jobs.php">Jobs</a></li>
				<?php } ?>
			   <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
				<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>

					<div class="dropdown">
					  <button class="btn btn-solid-border btn-round-full dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-user"></i> My Account
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-cog"></i> Personal Information</a>
					    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalPassword"><i class="fa fa-lock"></i> Update Password</a>
					    <a class="dropdown-item" href="methods/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
					  </div>
					</div>
					<!-- <a href="methods/logout.php" class="btn btn-solid-border btn-round-full"><i class="fa fa-user"></i> My Account</a> -->



					<!-- Modal Information-->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Update Account <i class="fa fa-cog"></i></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	
					      	<?php 

					      	$selectUser = ' SELECT `id`, `name`, `lastname`, `middle_name`, `email_address`, `department`, `mobile_number`, `course`, `sr_code`, `account_password`, `account_status` FROM `user_information` WHERE id = '.$_SESSION['id'].' ';
					      	$execUser = $database->conn->query($selectUser);
					      	$user = $execUser->fetch_assoc();

					      	 ?>
					      	<div class="row">
					      		<div class="col-md-4">
					      			Firstname
					      			<input type="text" class="form-control" id="update_name" value="<?php echo $user['name']; ?>">
					      		</div>
					      		<div class="col-md-4">
					      			Middlename
					      			<input type="text" class="form-control" id="update_middlename"  value="<?php echo $user['middle_name']; ?>">
					      		</div>
					      		<div class="col-md-4">
					      			Lastname
					      			<input type="text" class="form-control" id="update_lastname"  value="<?php echo $user['lastname']; ?>">
					      		</div>
					      	</div>
					      	
					      	<div class="row">
					      		<div class="col-md-6">
					      			Email Address
					      			<input type="text" class="form-control" id="update_email"  value="<?php echo $user['email_address']; ?>">
					      		</div>
					      		<div class="col-md-6">
					      			Contact Number
					      			<input type="text" class="form-control" id="update_number"  value="<?php echo $user['mobile_number']; ?>">
					      		</div>
					      	</div>
					      	
					      	<div class="row">
					      		<div class="col-md-6">
					      			Department
					      			<input type="text" class="form-control" id="update_dpartment"  value="<?php echo $user['department']; ?>">
					      		</div>
					      		<div class="col-md-6">
					      			Course
					      			<input type="text" class="form-control" id="update_course"  value="<?php echo $user['course']; ?>">
					      		</div>
					      	</div>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary" id="btnUpdate">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Modal Information-->


					<!-- Modal Information-->
					<div class="modal fade" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Update Password <i class="fa fa-lock"></i></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					      	<div class="row">
					      		<div class="col-md-12">
					      			Password
					      			<input type="password" class="form-control" id="update_password">
					      		</div>
					      		<div class="col-md-12">
					      			Confirm Password
					      			<input type="password" class="form-control" id="update_confirm_password">
					      		</div>
					      	</div>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary" id="btnUpdatePassword">Update</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- Modal Information-->


				<?php } else { ?>	


					<a href="login.php" class="btn btn-solid-border btn-round-full"><i class="fa fa-user"></i> My Account</a>
				<?php } ?>
			</form>
		  </div>
		</div>
	</nav>
</header>



