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
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">In Depth Details</span>
          <h1 class="text-capitalize mb-4 text-lg">Forum Topic</h1>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<!-- <img src="images/blog/2.jpg" alt="" class="img-fluid rounded"> -->

			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
				</div> 

				<h2 class="mt-3 mb-4"><a href="blog-single.html">Improve design with typography?</a></h2>
				<p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p>

			</div>
		</div>
	</div>

	<div class="col-lg-12 mb-5">
		<div class="comment-area card border-0 p-5">
			<h4 class="mb-4">2 Comments</h4>
			<ul class="comment-tree list-unstyled">

				<?php for ($i=0; $i < 5; $i++) { ?>

				<li class="mb-5" style="border-bottom: 0.5px solid darkgrey;">
					<div class="comment-area-box">
						<!-- <img alt="" src="images/blog/test1.jpg" class="img-fluid float-left mr-3 mt-2"> -->

						<h5 class="mb-1">Philip W</h5>
						<span>United Kingdom</span>

						<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
							<!-- <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a> -->
							<span class="date-comm">Posted October 7, 2018 </span>
						</div>

						<div class="comment-content mt-3">
							<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
						</div>
					</div>
				</li>

				<?php } ?>

			</ul>
		</div>
	</div>

	<div class="col-lg-12">
		<form class="contact-form bg-white rounded p-5" id="comment-form">
			<h4 class="mb-4">Write a comment</h4> 


			<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

			<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
		</form>
	</div>
</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
	<!-- <div class="sidebar-widget search card p-4 mb-3 border-0">
		<input type="text" class="form-control" placeholder="search">
		<a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
	</div> -->

	<div class="sidebar-widget card border-0 mb-3">
		<center><img src="images/logo1.png" alt="" class="img-fluid mt-1" width="300"></center>
		<div class="card-body p-4 text-center">
			<h5 class="mb-0 mt-4">BSU Alumni Admin</h5>
			<p>Batangas State University</p>
			<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p> -->

			<ul class="list-inline author-socials">
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
				</li>
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-twitter text-muted"></i></a>
				</li>
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-youtube text-muted"></i></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
		<h5>Latest Topics</h5>

        <div class="media border-bottom py-3">
            <!-- <a href="#"><img class="mr-4" src="images/blog/bt-3.jpg" alt=""></a> -->
            <div class="media-body">
                <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
                <span class="text-sm text-muted">03 Mar 2018</span>
            </div>
        </div>

        <div class="media border-bottom py-3">
            <!-- <a href="#"><img class="mr-4" src="images/blog/bt-2.jpg" alt=""></a> -->
           <div class="media-body">
                <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                <span class="text-sm text-muted">03 Mar 2018</span>
            </div>
        </div>

        <div class="media py-3">
            <!-- <a href="#"><img class="mr-4" src="images/blog/bt-1.jpg" alt=""></a> -->
            <div class="media-body">
                <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
                <span class="text-sm text-muted">03 Mar 2018</span>
            </div>
        </div>
	</div>

</div>
            </div>   
        </div>
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