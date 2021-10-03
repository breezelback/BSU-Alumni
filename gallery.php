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
  <?php include 'includes/header.php'; 

  if (!isset($_SESSION['id']) || empty($_SESSION['id'])) 
  {
    header('Location: login.php');
  }



  ?>




<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Batangas State University</span>
          <h1 class="text-capitalize mb-4 text-lg">Alumni Gallery</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- section portfolio start -->
<section class="section portfolio pb-0">

	<div class="container-fluid">
		<div class="row portfolio-gallery">

			<?php for ($i=0; $i < 6; $i++) {  ?>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">
					<a href="images/bg4-1.jpg" class="popup-gallery">
						<img src="images/bg4-1.jpg" alt="" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Image Name</h3>
							<p class="text-white-50">Sample Description</p>
						</div>
					</a>
				</div>
			</div>

			<?php } ?>
			

		</div>
	</div>
</section>

<!-- section portfolio END -->


<!-- footer Start -->
	<?php include 'includes/footer.php'; ?>
<!-- footer End -->
   
    </div>

   <?php include 'includes/js_includes.php'; ?>

  </body>
  </html>