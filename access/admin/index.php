<?php
include "./../../methods/globalmethods.php";
include "./../../methods/mysqliConnection.php";
$meth = new DataOperation;
$database = new Database;
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['account_type'])) {
  header("Location: ../../login.php");
}

$query = 'SELECT profile_pic FROM user_information WHERE id = '.$_SESSION['id'] .'';
$stmt = $database->conn->query($query);

$profile_pic = $stmt->fetch_assoc();

// echo $profile_pic['profile_pic'];

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
	  				<div class="img" style="background-image: url(<?php echo($profile_pic['profile_pic'] == '') ?  './profile_pic/default.png' : './profile_pic/'.$profile_pic['profile_pic']; ?>);"></div>
	  				<h3><?php echo $meth->getFullname($_SESSION["id"]); ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="./"><span class="fa fa-home mr-3"></span> Home</a>
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
            <a href="index.php?page=settings"><span class="fa fa-cog mr-3"></span> Account Settings</a>
          </li>
          <li>
            <a href="./../../methods/logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <!-- <h2 class="mb-4">Administrator</h2> -->
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
    <script src="./dependency/chart/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
   
  </body>
</html>
<script>
  // initialize for all the pages the script is here
  $(document).ready(() => {
    $('#alluser_table').DataTable();
    $('#pending_user').DataTable();
    $('#job_table').DataTable();

    
    $.ajax({
    url: "http://localhost/BSU-Alumni/methods/chart_data.php",
    method: "GET",
    success: function(data) {

var ctx = document.getElementById('bar_chart').getContext('2d');


new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',
    backgroundColor: 'rgba(0, 0, 0, 0.1)',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Total ',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [data.jan, data.feb, data.march, data.apr, data.may, data.june, data.july, data.aug, data.sept, data.oct, data.nov, data.dec],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
              ],
              borderWidth: 3
        }]
    },
    options:{
      legend: {
      display: false
    }  
    }
});

    },
    error: function(data) {
        console.log(data);
    }
})

var pieConfig = document.getElementById('pie_chart');

new Chart(pieConfig, {
  type: 'pie',
  data: {
    labels: ["Employed", "Unemployed"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#95a5a6",
      ],
      data: [12, 19]
    }]
  },
  option : {
    bezierCurve : false,
    // onAnimationComplete: done 
  }
});

  }) // end of onready

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
    let company = $('#company');
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
        company: company.val(),
        job_salary: job_salary.val(),
        admin_id: admin_id.val()
      }, success: (response) => {
        job_title.val('');
        company.val('');
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

// this is for api
$(document).ready(() => {
  fetch('https://jsonplaceholder.typicode.com/todos/1')
  .then(response => response.json())
  .then(json => console.log(json))
});


$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
}
});


// preview image

$(document).on("change", "#file_add", function() {
        event.preventDefault(); 

        //get file details
          var property = this.files[0];
          var image_name = property.name;
          var image_extension = image_name.split('.').pop().toLowerCase();
          var image_size = property.size;

        //filter extension
        if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg'])==-1) {
          
           alert("Invalid Format!");
        }

        //filter size
        else if(image_size>3000000) {
          alert("File is too big");
          
        } 

        else if(this.files && this.files[0]) {
          document.getElementById("image_add").classList.remove("required-fields");
          var obj = new FileReader();
          obj.onload = function(data) { document.getElementById("image_add").src = data.target.result; }
          obj.readAsDataURL(this.files[0]);
        }

       });


 updateAccount = (id) => {
   let name = $('#name').val();
   let lastname = $('#lastname').val();
   let middlename = $('#middle_name').val();
   let email_address = $('#email').val();
   let course = $('#course').val();
   let department = $('#department').val();
   let password = $('#password').val();
   let default_image = $('#default_image').val();
   let file = $('#file_add').val();

  if(name != '' && lastname != '' && middlename != '' && email_address != '' && course != '' && department != '' && password != '') {
    var file_property = document.getElementById("file_add").files[0];
      var form_data = new FormData();
      form_data.append("file_add",file_property);
       var other_data = "get_key=update_profile&name="+name+"&id="+id+"&lastname="+lastname+"&middlename="+middlename+"&email_address="+email_address+"&course="+course+"&department="+department+"&password="+password+"&image_name="+new Date().getTime();
    console.log(other_data)
      $.ajax({
      url: "./../../methods/ajaxCall.php?"+other_data,
      method: "post",
      // dataType: "text",
      data: form_data,
      contentType:false,
      cache:false,
      processData:false,
      success: (response) => {
        alert(response);
        // $("#pending_"+id).parent().remove();
      // load_image_data();
      }
    })
  
  } else {
    alert('All fields are required');
  }
   
  

 }// end onchage photo


  // for open modal

  account_information = (id) => {
  //  let name = $('#name').val();
  //  let lastname = $('#lastname').val();
  //  let middlename = $('#middle_name').val();
  //  let email_address = $('#email').val();
  //  let course = $('#course').val();
  //  let department = $('#department').val();
  //  let password = $('#password').val();
  //  let sr_number = $('#sr_number').val();
  //  let status = $('#status').val();

  $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "json",
      data: {
        key: "get_user_information",
        id: id
      }, success: (response) => {
        // alert(response.sr_code)

        $('#account_information').modal('show');
         $('#ename').val(response.name);
         $('#elastname').val(response.lastname);
         $('#emiddle_name').val(response.middle_name);
         $('#eemail').val(response.email_address);
         $('#ecourse').val(response.course);
         $('#edepartment').val(response.department);
         $('#epassword').val(response.account_password);
         $('#esr_number').val(response.sr_code);
         $('#estatus').val(response.account_status);
         $('#user_id').val(response.id);
       
      }
    })
 }

 // for saving updated user
 save_user = () => {
   let name = $('#ename').val();
   let lastname = $('#elastname').val();
   let middlename = $('#emiddle_name').val();
   let email_address = $('#eemail').val();
   let course = $('#ecourse').val();
   let department = $('#edepartment').val();
   let password = $('#epassword').val();
   let sr_number = $('#esr_number').val();
   let status = $('#estatus').val();
   let id = $('#user_id').val();

   $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "save_new_information",
        id: id,
        name: name,
        lastname: lastname,
        middlename: middlename,
        email_address: email_address,
        course: course,
        department: department,
        password: password,
        sr_number: sr_number,
        status: status
      }, success: (response) => {
        alert(response)
       
      }
    })

 }

 open_job_information_modal = (id) => {

  $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "json",
      data: {
        key: "get_job_information",
        id: id
      }, success: (response) => {
        // alert(response.sr_code)

        $('#job_information').modal('show');
        $('#job_title_edited').val(response.title);
        $('#company_edited').val(response.company);
        $('#job_description_edited').val(response.description);
        $('#job_salary_edited').val(response.salary);
        $('#jobId').val(response.id);

      }
    })
 
 }

 save_edited_job = () => {
  let title = $('#job_title_edited').val();
  let company = $('#company_edited').val();
  let description = $('#job_description_edited').val();
  let salary = $('#job_salary_edited').val();
  let id = $('#jobId').val();

  if(title === '' || company === '') {
    alert('Title and Company is required!');
  } else {

  $.ajax({
      url: "./../../methods/ajaxCall.php",
      method: "post",
      dataType: "text",
      data: {
        key: "save_edited_job",
        id: id,
        title: title,
        company: company,
        description: description,
        salary: salary
      }, success: (response) => {
        alert(response)
       
      }
    })
  }

 }

</script>