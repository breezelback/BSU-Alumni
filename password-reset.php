<!doctype html>
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
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
	  <div class="col-md-4"></div>
      <div class="col-md-4" style="border: 1px solid whitesmoke; padding: 20px; border-radius: 5px">
        <div class="block text-center">

          <h5 class="text-white">Password Reset</h5>
          <p><i>Please input SR-Code and email for password reset request.</i></p>
		<form action="./methods/reset-function.php" method="POST">

		<?php if(isset($_GET['auth'])) : ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                 New Password has been sent to your email!    
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
            </div>
        <?php endif; ?>
	
				<div class="form-group mt-3">
					<input name="srcode" type="text" class="form-control" placeholder="SR-Code" required="">
				</div>
				<div class="form-group">
					<input name="email" type="email" class="form-control" placeholder="Email" required="">
				</div>
				
				<input type="submit" class="btn btn-primary" value="Request">
				<a href="login.php"  class="btn btn-danger">Back to Login</a>
		</form>

        </div>
      </div>
	  <div class="col-md-4"></div>
    </div>
  </div>
</section>
<!-- contact form start -->
<!-- 
<div class="google-map">
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

	  request_sr = () => {
		let firstname = $('#sr_fname');
		let lastname = $('#sr_lastname');
		let middlename = $('#sr_middle');
		let email = $('#sr_email');
		let mobile = $('#sr_mobile');
		let address = $('#sr_address');
		let department = $('#sr_department');
		let course = $('#sr_course');
		
		$.ajax({
			url: './methods/ajaxCall.php',
			method: 'post',
			dataType: 'text',
			data: {
				key: 'request_srcode',
				firstname: firstname.val(),
				lastname: lastname.val(),
				middlename: middlename.val(),
				email: email.val(),
				mobile: mobile.val(),
				address: address.val(),
				department: department.val(),
				course: course.val()
			}, success: (response) => {
				alert(response)
			}
		})
	  }

	   register = () => {
		var today = new Date();
        var currentDate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var srCode = $('#sr_code').val();

		let firstname = $('#firstname');
		let lastname = $('#lastname');
		let middlename = $('#middlename');
		let email = $('#email');
		let mobile = $('#mobile');
		let address = $('#address');
		let department = $('#department');
		let course = $('#course');
		let sr_code = $('#sr_code');
		let password = $('#password');
		let employment_status = $("#employment_status");

	if( (firstname.val() == '') || (lastname.val() == '') || (email.val() == '') || (department.val() == '') || (employment_status.val() == '') || (password.val() == '') || (middlename.val() == '') || (mobile.val() == '') || (address.val() == '') || (course.val() == '') || (sr_code.val() == '') ) {

		alert("All fields are required!");

	} else {
	
		// alert("firstname : "+firstname.val());
		$.ajax({
			url: './methods/ajaxCall.php',
			method: 'post',
			dataType: 'text',
			data: {
				key: 'registerUser',
				firstname: firstname.val(),
				lastname: lastname.val(),
				middlename: middlename.val(),
				email: email.val(),
				mobile: mobile.val(),
				address: address.val(),
				department: department.val(),
				sr_code: sr_code.val(),
				password: password.val(),
				course: course.val(),
				employment_status: employment_status.val(),
				currentDate: currentDate,
			}, success: (response) => {
				alert(response)
				window.location = ' alumni-tracking.php?sr_code='+srCode;
			}
		})
	}
		
	  }


  </script>