<?php
include "./../../methods/globalmethods.php";
include "./../../methods/mysqliConnection.php";
$meth = new DataOperation;
$database = new Database;
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['account_type'])) {
  header("Location: ../../login.php");
}

?>


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
	  				<h3><?php echo $meth->getFullname($_SESSION["id"]); ?></h3>
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
            <a href="index.php?page=forum"><span class="fa fa-comments mr-3"></span> Create Forum</a>
          </li>
          <li>
            <a href="index.php?page=settings"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="./../../methods/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Administrator</h2>
        <input type="hidden" id="myID" value="<?php echo $_SESSION["id"]; ?>">
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

    <script src="./../../plugins/jquery/jquery.js"></script>
    <script src="./../../js/jquery.min.js"></script>
    <script src="./../../js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="./../../plugins/datatables/datatables.min.js"></script>
  </body>
</html>
<script>
  // initialize for all the pages the script is here
  $(document).ready(() => {
    $('#alluser_table').DataTable();
    $('#pending_user').DataTable();
  })

  // this is for publish forum page
  publishForum = () => {
    let topic = $('#topic');
    let description = $('#description');
    let admin_id = $('#myID');

    $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "post_forum",
        topic: topic.val(),
        description: description.val(),
        admin_id: admin_id.val()
      }, success: (response) => {
        topic.val('');
        description.val('');
        alert(response)
      }
    })
    
  }

</script>