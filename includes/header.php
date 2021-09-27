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
					<a href="methods/logout.php" class="btn btn-solid-border btn-round-full"><i class="fa fa-user"></i> My Account</a>
				<?php } else { ?>	
					<a href="login.php" class="btn btn-solid-border btn-round-full"><i class="fa fa-user"></i> My Account</a>
				<?php } ?>
			</form>
		  </div>
		</div>
	</nav>
</header>
