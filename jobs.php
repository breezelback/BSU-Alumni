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
          <span class="text-white">List of</span>
          <h1 class="text-capitalize mb-4 text-lg">Available Jobs</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">

			<?php for ($i=0; $i < 6; $i++) { ?>
				<div class="col-lg-6 col-md-6 mb-5">
					<div class="blog-item">


						<div class="blog-item-content bg-white p-5">
							<div class="blog-item-meta bg-gray py-1 px-2">
								<!-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span> -->
								<!-- <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span> -->
								<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
							</div> 

							<h3 class="mt-3 mb-3"><a href="blog-single.html">Improve design with typography?</a></h3>
							<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

							<a href="job-post.php" class="btn btn-small btn-main btn-round-full">Learn More</a>
						</div>

					</div>
				</div>		
			<?php } ?>

		</div>

        <!-- <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
            	<nav class="navigation pagination d-inline-block">
	                <div class="nav-links">
	                    <a class="prev page-numbers" href="#">Prev</a>
	                    <span aria-current="page" class="page-numbers current">1</span>
	                    <a class="page-numbers" href="#">2</a>
	                    <a class="next page-numbers" href="#">Next</a>
	                </div>
	            </nav>
            </div>
        </div> -->
    </div>
</section>

<hr>
<!-- footer Start -->
	<?php include 'includes/footer.php'; ?>
<!-- footer End -->
   
    </div>

   <?php include 'includes/js_includes.php'; ?>

  </body>
  </html>