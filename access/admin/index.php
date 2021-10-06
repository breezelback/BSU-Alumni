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
  	<title>BSU Administrator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="images/logo1.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./../../plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="css/admin.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg4-1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo1.png);"></div>
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
            <a href="index.php?page=forum"><span class="fa fa-comments mr-3"></span> Forum</a>
          </li>
          <!-- <li>
            <a href="index.php?page=joinforum"><span class="fa fa-commenting mr-3"></span>Forum</a>
          </li> -->
          <li>
            <a href="index.php?page=jobs"><span class="fa fa-handshake-o mr-3"></span> Jobs</a>
          </li>
          <li>
            <a href="index.php?page=gallery"><span class="fa fa-picture-o mr-3"></span> Gallery</a>
          </li>
          <li>
            <a href="index.php?page=srrequest"><span class="fa fa-id-card-o mr-3"></span> SR Request</a>
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
    $('#job_table').DataTable();
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

  post_job = () => {
    let job_title = $('#job_title');
    let job_description = $('#job_description');
    let job_salary = $('#job_salary');
    let admin_id = $('#myID');

    $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "post_job",
        job_title: job_title.val(),
        job_description: job_description.val(),
        job_salary: job_salary.val(),
        admin_id: admin_id.val()
      }, success: (response) => {
        job_title.val('');
        job_description.val('');
        job_salary.val('');
        alert(response)
      }
    })
    
  }


// for gallery

$(document).ready(function(){
   
function load_image_data()
 {
   $.ajax({
      url:"./pages/load_gallery_table.php",
      method:"POST",
      success:function(data)
      {
      $('#image_table').html(data);
      }
   });
 } 

 load_image_data();



$('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 2000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"./pages/upload_image_function.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });

 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var image_name = $(this).data("image_name");
  if(confirm("Are you sure?"))
  {

    $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "del_image",
        image_id:image_id,
        image_name:image_name
      }, success: (response) => {
        alert(response);
       load_image_data();
      }
    })
  //  $.ajax({
  //   url:"./../../methods/ajaxCall.php",
  //   method:"POST",
  //   dataType: "text",
  //   data: {key: "del_image", image_id:image_id, image_name:image_name},
  //   success:function(data)
  //   {
  //    load_image_data();
  //     alert(data);
  //   }
  //  });
  }
 });   

}); // end of onready

delete_job = (id) => {
  if(confirm("Are you sure?"))
  {

    $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "del_job",
        id: id
      }, success: (response) => {
        alert(response);
        $("#job_"+id).parent().remove();
      // load_image_data();
      }
    })

  }
}

delete_user = (id) => {
  if(confirm("Are you sure?"))
  {

    $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "del_user",
        id: id
      }, success: (response) => {
        alert(response);
        $("#user_"+id).parent().remove();
      // load_image_data();
      }
    })

  }
}

delete_pending = (id) => {
  if(confirm("Are you sure?"))
  {

    $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "del_user",
        id: id
      }, success: (response) => {
        alert(response);
        $("#pending_"+id).parent().remove();
      // load_image_data();
      }
    })

  }
}



</script>