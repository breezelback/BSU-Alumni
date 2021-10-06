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
          <span class="text-white">In Depth Details</span>
          <h1 class="text-capitalize mb-4 text-lg">Job Description</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
$jobId = $_GET['id'];

$sql = ' SELECT `id`, `title`, `description`, `salary`, `admin_id`, `date_posted` FROM `jobs` WHERE `id` = '.$jobId.' ';
$exec = $database->conn->query($sql);
$row = $exec->fetch_assoc();

 ?>

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
					<!-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span> -->
					<!-- <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span> -->
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?php echo $row['date_posted']; ?></span>
				</div> 

				<h2 class="mt-3 mb-4"><a href=""><?php echo $row['title']; ?></a></h2>

        <p><?php echo $row['description']; ?></p>
				<p><?php echo $row['salary']; ?></p>

			</div>
		</div>
	</div>

</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">

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
		<h5>Latest Jobs</h5>

    <?php 

      $latest = ' SELECT `id`, `title`, `description`, `salary`, `admin_id`, `date_posted` FROM `jobs` WHERE `id` != '.$jobId.' ORDER BY `id` DESC LIMIT 3';
      $execLatest = $database->conn->query($latest);
      while ($rowLatest = $execLatest->fetch_assoc())
      {

     ?>
            <div class="media border-bottom py-3">
                <!-- <a href="#"><img class="mr-4" src="images/blog/bt-3.jpg" alt=""></a> -->
                <div class="media-body">
                    <h6 class="my-2"><a href="job-post.php?id=<?php echo $rowLatest['id']; ?>"><?php echo $rowLatest['title']; ?></a></h6>
                    <span class="text-sm text-muted"><?php echo $rowLatest['date_posted']; ?></span>
                </div>
            </div>

     <?php } ?>

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