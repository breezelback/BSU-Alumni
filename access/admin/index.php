<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./../../plugins/datatables/datatables.min.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bsu-building.jpeg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3>Catriona Henderson</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <!-- <li>
              <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
          </li> -->
          <!-- <li>
            <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
          </li> -->
          <li>
            <a href="index.php?page=allusers"><span class="fa fa-users mr-3"></span> All Users</a>
          </li>
          <li>
            <a href="index.php?page=pendingusers"><span class="fa fa-lock mr-3"></span> Pending Accounts</a>
          </li>
          <li>
            <a href="index.php?page=settings"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Administrator</h2>

        <?php 

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $display = "pages/".$page.'.php';               

            include($display);
        }else{
            $page = 'home';
            $display = "pages/".$page.'.php';
            include($display);
        }
      ?>
     
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="./../../plugins/datatables/datatables.min.js"></script>
  </body>
</html>
<script>
  // initialize for all the pages the script is here
  $(document).ready(() => {
    $('#alluser_table').DataTable();
  })
</script>