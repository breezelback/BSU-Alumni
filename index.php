<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>BSU Malvar | Alumni Tracking System</title>

  <?php include 'includes/css_includes.php'; ?>
</head>

<body>


<!-- Header Start --> 
  <?php include 'includes/header.php'; ?>
<!-- Header Close --> 

<div class="main-wrapper ">
<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-10">
				<div class="block">
					<span class="d-block mb-3 text-white text-capitalize">Batangas State University - JPLPC Malvar Campus</span>
					<h1 class="animated fadeInUp mb-5">Alumni Tracking <br>and Management <br>System</h1>
					<a href="#" target="_blank" class="btn btn-main animated fadeInUp btn-round-full" >Get started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Intro Start -->

<section class="section intro">
	<div class="container">
		<div class="row ">
			<div class="col-lg-8">
				<div class="section-title">
					<span class="h6 text-color ">Main Purpose of the System</span>
					<h2 class="mt-3 content-title">Connect all school alumni with knowledge and information sharing. </h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-12">
				<div class="intro-item mb-5 mb-lg-0"> 
					<i class="ti-desktop color-one"></i>
					<h4 class="mt-4 mb-3">Job Posting</h4>
					<p>View latest uploaded job that suits for you.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="intro-item mb-5 mb-lg-0">
					<i class="ti-thought color-one"></i> 
					<h4 class="mt-4 mb-3">Real-time Forum</h4>
					<p>Sharing of knowledge and thoughts to help every alumni grow.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="intro-item">
					<i class="ti-gallery color-one"></i>
					<h4 class="mt-4 mb-3">Alumni Gallery</h4>
					<p>Image gallery of Alumni.</p>
				</div>
			</div> 
		</div>
	</div>
</section>

<section class="section cta">
	<div class="container">
		<div class="row">
			<div class="col-lg-6"></div>
			<div class="col-lg-6">
				<div class="cta-item  bg-white p-5 rounded">
					<span class="h6 text-color">Forgot your SR-CODE? We got you!</span>
					<!-- <h2 class="mt-2 mb-4">Entrust Your Project to Our Best Team of Professionals</h2> -->
					<!-- <p class="lead mb-4">Send us these details and we will email you your SR-CODE.</p>

					<div class="row">
						<div class="col-sm-4">
							Firstname
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-4">
							Middlename
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-4">
							Lastname
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-12">
							Complete Address
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-6">
							Email Address
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-6">
							Mobile Number
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-6">
							Department
							<input type="text" class="form-control">
						</div>
						<div class="col-sm-6">
							Course
							<input type="text" class="form-control">
						</div>
					</div> -->

					<p class="mt-3">
						<center>
							<a href="login.php" class="btn btn-main animated fadeInUp btn-round-full" >Requst for SR-CODE<i class="btn-icon fa fa-angle-right ml-2"></i></a>
						</center>
					</p>
					<!-- <h3><i class="ti-mobile mr-3 text-color"></i>+23 876 65 455</h3> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Section Cta End-->
<!-- Section Testimonial Start -->
<!-- <section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 ">
				<div class="section-title">
					<span class="h6 text-color">Public's feedback</span>
					<h2 class="mt-3 content-title">Check out what others say about the system.</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row testimonial-wrap">

			<?php 
			$selectFeedback = ' SELECT `id`, `contact_name`, `contact_email`, `contact_message`, `status`, `date_uploaded` FROM `tbl_contact_us` ';
			$execFeedback = $database->conn->query($selectFeedback);
			while ($feedback = $execFeedback->fetch_assoc())
			{
			 ?>
				<div class="testimonial-item position-relative">
					<i class="ti-quote-left text-color"></i>

					<div class="testimonial-item-content">
						<p class="testimonial-text"><?php echo $feedback['contact_message']; ?></p>

						<div class="testimonial-author">
							<h5 class="mb-0 text-capitalize"><?php echo $feedback['contact_name']; ?></h5>
							<p><?php echo $feedback['contact_email']; ?></p>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
 -->
</section>



<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<div class="section-title">
					<span class="h6 text-color">Process and Steps in Getting Documents in the Registrar Office </span>
					<h6 class="mt-3">The Office of the Registrar has updated our Forms for requesting different documents. Attached here are the new links for the different request needed. After accomplishing the form send your request and forms to our FB page/messenger. Thank you!</h6>
					<center><a href="includes/Process.docx" class="btn mt-2" style="border: 1px solid gray;">Download Process and Steps <i class="fa fa-download"></i></a></center>
				</div>
			</div>
		</div>
	</div>

	
</section>







<br><hr>
<div class="google-map">
	<center>
   	 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.550433825609!2d121.15399471483383!3d14.044642090158431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6ed9735068d7%3A0x97fd25b226e150e7!2sBatangas%20State%20University%20Jose%20P.%20Laurel%20Polytechnic%20College!5e0!3m2!1sen!2sph!4v1630821791584!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    </center>
</div>
<hr>
<!-- footer Start -->
	<?php include 'includes/footer.php'; ?>
<!-- footer End -->
   
    </div>

   <?php include 'includes/js_includes.php'; ?>


  </body>
  </html>
   