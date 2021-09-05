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

          <h5 class="text-white">Alumni Login</h5>

           <div class="form-group mt-3">
	       		<input name="srcode" type="text" class="form-control" placeholder="SR-Code">
	       </div>
           <div class="form-group">
	       		<input name="password" type="password" class="form-control" placeholder="Password">
	       </div>

	       <button class="btn btn-primary">Continue</button>

        </div>
      </div>
	  <div class="col-md-4"></div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form" method="post" action="mail.php">

                    <h3 class="text-md mb-4">Registration Form</h3>

                    <div class="row">
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="name" type="text" class="form-control" placeholder="Lastame">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="name" type="text" class="form-control" placeholder="Firstname">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="name" type="text" class="form-control" placeholder="Middlename">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Email Address">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Mobile Number">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Address">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Department">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Course">
		                    </div>
                    	</div>
                    </div> 

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="SR Code">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="password" type="text" class="form-control" placeholder="Password">
		                    </div>
                    	</div>
                    </div>

                    <button class="btn btn-main" name="submit" type="submit">Send Message</button>

                </form>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form" method="post" action="mail.php">

                    <h3 class="text-md mb-4">SR-CODE Request Form</h3>

                    <div class="row">
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="name" type="text" class="form-control" placeholder="Lastame">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="name" type="text" class="form-control" placeholder="Firstname">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="name" type="text" class="form-control" placeholder="Middlename">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Email Address">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Mobile Number">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Address">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Department">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="text" type="text" class="form-control" placeholder="Course">
		                    </div>
                    	</div>
                    </div> 

                    <button class="btn btn-main" name="submit" type="submit">Request</button>

                </form>
            </div>
        </div>
    </div>
</section>

<div class="google-map">
	<center>
   	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.550433825609!2d121.15399471483383!3d14.044642090158431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6ed9735068d7%3A0x97fd25b226e150e7!2sBatangas%20State%20University%20Jose%20P.%20Laurel%20Polytechnic%20College!5e0!3m2!1sen!2sph!4v1630821791584!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    </center>
</div>
<!-- footer Start -->
	<?php include 'includes/footer.php'; ?>
<!-- footer End -->
   
    </div>

   <?php include 'includes/js_includes.php'; ?>

  </body>
  </html>