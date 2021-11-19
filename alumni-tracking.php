<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>BSU Malvar| Alumni Tracking System</title>

  <?php include 'includes/css_includes.php'; ?>

</head>

<body>

<!-- Header Start --> 
  <?php include 'includes/header.php'; ?>
<!-- Header Close --> 

<div class="main-wrapper ">


<?php 

$sr_code = $_GET['sr_code'];

$sql = ' SELECT `id` FROM `user_information` WHERE sr_code = "'.$sr_code.'" ';
$exec = $database->conn->query($sql);
$row = $exec->fetch_assoc();
$user_id = $row['id'];

if (isset($_POST['btnSubmit'])) 
{
	$degree = $_POST['degree'];
	$program = $_POST['program'];
	$year_graduated = $_POST['year_graduated'];
	$masters_program = $_POST['masters_program'];
	$masters_school = $_POST['masters_school'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$civil_status = $_POST['civil_status'];
	$address = $_POST['address'];
	$is_employed = $_POST['is_employed'];
	$working_status = $_POST['working_status'];
	$company_name = $_POST['company_name'];
	$position = $_POST['position'];
	$company_address = $_POST['company_address'];
	$employment_status = $_POST['employment_status'];

	$insert = ' INSERT INTO `tbl_tracking`(`user_id`, `degree`, `program`, `year_graduated`, `masters_program`, `masters_school`, `name`, `age`, `gender`, `civil_status`, `address`, `is_employed`, `working_status`, `company_name`, `position`, `company_address`, `employment_status`, `date_uploaded`) VALUES ( '.$user_id.', "'.$degree.'", "'.$program.'", "'.$year_graduated.'", "'.$masters_program.'", "'.$masters_school.'", "'.$name.'", "'.$age.'", "'.$gender.'", "'.$civil_status.'", "'.$address.'", "'.$is_employed.'", "'.$working_status.'", "'.$company_name.'", "'.$position.'", "'.$company_address.'", "'.$employment_status.'", NOW() ) ';
	$database->conn->query($insert);

	// header('location: login.php');
	echo "<script>alert('Successfully Uploaded! Please wait for admin approval.'); window.location = 'login.php';</script>";
}

else if (isset($_POST['btnCancel']))
{
	$sqlDelete = ' DELETE FROM `user_information` WHERE sr_code = "'.$sr_code.'" ';
	$database->conn->query($sqlDelete);

	// header('location: login.php');
	echo "<script>alert('Successfully Cancelled! Returning to login screen.'); window.location = 'login.php';</script>";
}


 ?>




<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            	<div style="border: 1px solid gray; padding: 10px; border-radius: 5px; background-color: #e0e0e0">
	                <form action="" method="post">

	                    <center><h3 class="text-md mb-4">Alumni Tracking Form</h3></center>
	                    

	                    <div class="row mt-3">
	                    	<div class="col-md-4">
	                    		<div class="form-group">
									<label for="cars">What is the most recent degree you completed at the University?</label>
									<select id="degree" name="degree" class="form-control" >
										<option value="undergraduate">Undergraduate / Bachelor's Degree</option>
										<option value="masters">Masters</option>
										<option value="phd">PhD</option>
										<option value="mba">MBA</option>
										<option value="executive">Executive Education</option>
										<option value="other">Other</option>
									</select>
			                    </div>
	                    	</div>
	                    	<div class="col-md-4">
	                    		<div class="form-group">
									<label for="cars">What program did you take?</label>
									<!-- <select id="degree" name="program" class="form-control mt-4" >
										<option value="bscs">BS Computer Science</option>
										<option value="mis">BS Information Technology Major in MIS</option>
										<option value="ba">BS Information Technology Major in BA</option>
										<option value="sm">BS Information Technology Major in SM</option>
										<option value="it">BS Information Technology</option>
									</select> -->
									<input type="text" class="form-control mt-4" name="program">
									
			                    </div>
	                    	</div>
	                    	<div class="col-md-4">
	                    		<div class="form-group">
									<label for="cars">What year did you graduate?</label>
									<input type="text" class="form-control mt-4" name="year_graduated">
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>
	                    
	                    <div class="row mt-3">
	                    	<div class="col-md-6">
								<div class="form-group">
									<label for="cars">If you are attending Masters or PHD? What degree/program did you take? (Skip if not attending)</label>
									<input type="text" class="form-control" name="masters_program">
			                    </div>
	                    	</div>
	                    	<div class="col-md-6">
								<div class="form-group">
									<label for="cars">Where did you take your Masters or PHD Degree? (Skip if not attending)</label>
									<input type="text" class="form-control mt-4" name="masters_school">
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>
	                    
	                    <div class="row mt-3">
	                    	<div class="col-md-4">
								<div class="form-group">
									<label for="cars">Given name / Full Name (Lastname)</label>
									<input type="text" class="form-control" name="name">
			                    </div>
	                    	</div>
	                    	<div class="col-md-4">
								<div class="form-group">
									<label for="cars">Age</label>
									<input type="text" class="form-control" name="age">
			                    </div>
	                    	</div>
	                    	<div class="col-md-4">
								<div class="form-group">
									<label for="cars">Gender</label>
									<select id="gender" name="gender" class="form-control" >
										<option value="female">Female</option>
										<option value="male">Male</option>
										<option value="other">Prefer not to say</option>
									</select>
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>
	                    
	                    <div class="row mt-3">
	                    	<div class="col-md-4">
								<div class="form-group">
									<label for="cars">Civil Status</label>
									<select id="gender" name="civil_status" class="form-control" >
										<option value="single">Single</option>
										<option value="married">Married</option>
										<option value="seperated">Seperated</option>
										<option value="widower">Widower</option>
									</select>
			                    </div>
	                    	</div>
	                    	<div class="col-md-8">
								<div class="form-group">
									<label for="cars">Complete Address</label>
									<input type="text" class="form-control" name="address">
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>

	                    
	                    <div class="row mt-3">
	                    	<div class="col-md-6">
	                    		<div class="form-group">
									<label for="cars">Are you presently employed?</label>
									<select id="is_employed" name="is_employed" class="form-control" >
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
			                    </div>
	                    	</div>
	                    	<div class="col-md-6">
	                    		<div class="form-group">
									<label for="cars">What is your current employment status</label>
									<select id="working_status" name="working_status" class="form-control" >
										<option value="regular">Regular or Permanent</option>
										<option value="temporary">Temporary</option>
										<option value="casual">Casual</option>
										<option value="contractual">Contractual</option>
										<option value="self_employed">Self Employed</option>
										<option value="na">NA</option>
									</select>
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>

	                    
	                    <div class="row mt-3">
	                    	<div class="col-md-6">
	                    		<div class="form-group">
									<label for="cars">What is the name of your company? (Skip if not employed)</label>
									<input type="text" class="form-control" name="company_name">
			                    </div>
	                    	</div>
	                    	<div class="col-md-6">
	                    		<div class="form-group">
									<label for="cars">What is your current position in the company? (Skip if not employed)</label>
									<input type="text" class="form-control" name="position">
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>



	                    <div class="row mt-3">
	                    	<div class="col-md-7">
	                    		<div class="form-group">
									<label for="cars">What is the company address? (Skip if not employed)</label>
									<input type="text" class="form-control mt-4" name="company_address">
			                    </div>
	                    	</div>
	                    	<div class="col-md-5">
								<div class="form-group">
									<label for="cars">What is your working conditions regarding employment in the last 24 months after your graduation?</label>
									<select id="employment_status" name="employment_status" class="form-control" >
										<option value="fulltime">In full time work (i.e. working 35 hours a week or more)</option>
										<option value="partime">In part time work (i.e. working fewer than 35 hours a week)</option>
										<option value="unemployed">Unemployed but seeking employment</option>
										<option value="not_available">Not available for work for reasons such as ill, health, military service, travel</option>
									</select>
			                    </div>
	                    	</div>
	                    </div>
	                    <hr>

	                    <center>
	                    	<button class="btn btn-danger" name="btnCancel" type="submit">Cancel <i class="fa fa-times"></i></button>
	                    	<button type="submit" class="btn btn-primary" name="btnSubmit">Submit <i class="fa fa-check"></i></button>
	                	</center>

	            	</form>
            	</div>
            </div>

        </div>
    </div>
</section>

<!-- <div class="google-map">
	<center>
   	 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.550433825609!2d121.15399471483383!3d14.044642090158431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6ed9735068d7%3A0x97fd25b226e150e7!2sBatangas%20State%20University%20Jose%20P.%20Laurel%20Polytechnic%20College!5e0!3m2!1sen!2sph!4v1630821791584!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    </center>
</div> -->

<!-- footer Start -->
	<?php include 'includes/footer.php'; ?>
<!-- footer End -->
   
    </div>

   <?php include 'includes/js_includes.php'; ?>

  </body>
  </html>
  <script>



	
		// $.ajax({
		// 	url: './methods/ajaxCall.php',
		// 	method: 'post',
		// 	dataType: 'text',
		// 	data: {
		// 		key: 'registerUser',
		// 		firstname: firstname.val(),
		// 		lastname: lastname.val(),
		// 		middlename: middlename.val(),
		// 		email: email.val(),
		// 		mobile: mobile.val(),
		// 		address: address.val(),
		// 		department: department.val(),
		// 		sr_code: sr_code.val(),
		// 		password: password.val(),
		// 		course: course.val(),
		// 		employment_status: employment_status.val(),
		// 		currentDate: currentDate,
		// 	}, success: (response) => {
		// 		alert(response)
		// 		window.location = ' alumni-tracking.php ';
		// 	}
		// })



  </script>