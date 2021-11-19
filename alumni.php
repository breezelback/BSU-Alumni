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
$qry = '';
$searchVal = '';

if (isset($_POST['btnSearch'])) 
{
  $searchVal = $_POST['searchVal'];
  $qry = 'AND name LIKE "%'.$searchVal.'%" ';
}

  ?>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Directory of </span>
          <h1 class="text-capitalize mb-4 text-lg">Alumni</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form action="" method="post">
            <center>
              Search by Alumni Name:
              <input type="text" name="searchVal" class="form-control" value="<?php echo $searchVal; ?>" required="">
              <button type="submit" name="btnSearch" class="btn btn-primary mt-1" style="font-size: 10px;">Search <i class="fa fa-search"></i></button>
            </center>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>

      <div class="row mt-3">

      <?php
      $sql = ' SELECT `id`, `name`, `lastname`, `middle_name`, `email_address`, `department`, `mobile_number`, `course`, `sr_code`, `account_password`, `account_status`, `employment_status`, `profile_pic`, DATE_FORMAT(`date_register`, "%M %d, %Y") AS date_register FROM `user_information` WHERE account_status = "alumni" '.$qry.' ';
      $exec = $database->conn->query($sql);
      while ($row = $exec->fetch_assoc()) 
      {
      ?>

				<div class="col-lg-6 col-md-6 mb-5">
					<div class="blog-item">


						<div class="blog-item-content bg-white p-5">
							<div class="blog-item-meta bg-success py-1 px-2">
								<span class="text-white text-capitalize mr-3"><i class="fa fa-globe-asia mr-2"></i>Active</span>
								<!-- <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span> -->
								<!-- <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?php echo $row['date_posted']; ?></span> -->
							</div> 

							<h3 class="mt-3 mb-1"><a href="blog-single.html"></i> <?php echo $row['name'].' '.$row['lastname']; ?></a></h3>
              <p class="mb-1"><i class="fa fa-envelope"></i> <?php echo $row['email_address']; ?></p>
              <p class="mb-1"><i class="fa fa-mobile"></i> <?php echo $row['mobile_number']; ?></p>
              <p class="mb-1"><i class="fa fa-briefcase"></i> <?php echo strtoupper($row['department']); ?></p>
							<p class="mb-1"><small>Member since: <?php echo $row['date_register']; ?></small></p>

							<!-- <a href="alumni-profile.php?id=<?php echo $row['id']; ?>" class="btn btn-small btn-main btn-round-full">View Profile</a> -->
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