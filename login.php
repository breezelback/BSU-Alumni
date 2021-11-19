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
	  <div class="col-md-4"></div>
      <div class="col-md-4" style="border: 1px solid whitesmoke; padding: 20px; border-radius: 5px">
        <div class="block text-center">

          <h5 class="text-white">Alumni Login</h5>
		<form action="./methods/loginOperation.php" method="POST">

		<?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <?php echo $_GET['error'] ?>    
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
            </div>
        <?php endif; ?>
	
				<div class="form-group mt-3">
					<input name="srcode" type="text" class="form-control" placeholder="SR-Code">
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Password">
				</div>
				
				<input type="submit" class="btn btn-primary" value="Continue">
				<br>
				<span class="float-right mt-2"><i><u><a href="password-reset.php" style="color:white;">Forgot Password</a></u></i></span>
		</form>

        </div>
      </div>
	  <div class="col-md-4"></div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form">

                    <h3 class="text-md mb-4">Registration Form</h3>

                    <div class="row">
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Lastname">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="firstname" id="firstname" type="text" class="form-control" placeholder="Firstname">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="middlename" id="middlename" type="text" class="form-control" placeholder="Middlename">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="email" id="email" type="email" class="form-control" placeholder="Email Address">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="mobile" id="mobile" type="text" class="form-control" placeholder="Mobile Number">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
		                    <div class="form-group">
		                        <input name="address" id="address" type="text" class="form-control" placeholder="Address">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <!-- <input name="department" id="department" type="text" class="form-control" placeholder="Department"> -->

								Department:
								<select class="form-control" id="department" name="department">
									<option value="cit">COLLEGE OF INDUSTRIAL TECHNOLOGY</option>
									<option value="cecs">COLLEGE OF ENGINEERING</option>
									<option value="cics">COLLEGE OF INFORMATICS AND COMPUTING SCIENCES</option>
									<option value="cte">COLLEGE OF TEACHER EDUCATION</option>
									<option value="cas">COLLEGE OF ARTS AND SCIENCES</option>
									<option value="cab">COLLEGE OF ACCOUNTANCY, BUSINESS, ECONOMICS AND INTERNATIONAL HOSPITALITY MANAGEMENT</option>
								</select>
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <!-- <input name="course" id="course" type="text" class="form-control" placeholder="Course"> -->
								Course:
								<select class="form-control" id="course" name="course">
								</select>

		                    </div>
                    	</div>
                    </div> 

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="sr_code" id="sr_code" type="text" class="form-control" placeholder="SR Code">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
								<!-- additional column if need to add field -->
                    	</div>
                    	<div class="col-md-6">
						<div class="form-group">
							<!-- <label for="cars">Choose a car:</label> -->
							<select id="employment_status" name="employment_status" class="form-control" >
								<option selected disabled>Employment Status</option>
								<option value="employed">Employed</option>
								<option value="unemployed">Unemployed</option>
							</select>
		                    </div>
                    	</div>
                    </div>

                    <button class="btn btn-main" onclick="register()" name="submit" type="submit">Submit</button>

                </form>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form" method="post" action="mail.php">

                    <h3 class="text-md mb-4">SR-CODE Request Form</h3>

                    <div class="row">
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="sr_lastname" id="sr_lastname" type="text" class="form-control" placeholder="Lastame">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="sr_fname" id="sr_fname" type="text" class="form-control" placeholder="Firstname">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="sr_middle" id="sr_middle" type="text" class="form-control" placeholder="Middlename">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="sr_email" id="sr_email" type="email" class="form-control" placeholder="Email Address">
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <input name="sr_mobile"  id="sr_mobile" type="text" class="form-control" placeholder="Mobile Number">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-8">
		                    <div class="form-group">
		                        <input name="sr_address" id="sr_address" type="text" class="form-control" placeholder="Address">
		                    </div>
                    	</div>
                    	<div class="col-md-4">
		                    <div class="form-group">
		                        <input name="year_graduated" id="year_graduated" type="number" class="form-control" placeholder="Year Graduated">
		                    </div>
                    	</div>
                    </div>

                    <div class="row">
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <!-- <input name="sr_department" id="sr_department" type="text" class="form-control" placeholder="Department"> -->
								Department:
								<select class="form-control" id="sr_department" name="sr_department">
									<option value="cit">COLLEGE OF INDUSTRIAL TECHNOLOGY</option>
									<option value="cecs">COLLEGE OF ENGINEERING</option>
									<option value="cics">COLLEGE OF INFORMATICS AND COMPUTING SCIENCES</option>
									<option value="cte">COLLEGE OF TEACHER EDUCATION</option>
									<option value="cas">COLLEGE OF ARTS AND SCIENCES</option>
									<option value="cab">COLLEGE OF ACCOUNTANCY, BUSINESS, ECONOMICS AND INTERNATIONAL HOSPITALITY MANAGEMENT</option>
								</select>
		                    </div>
                    	</div>
                    	<div class="col-md-6">
		                    <div class="form-group">
		                        <!-- <input name="sr_course" id="sr_course" type="text" class="form-control" placeholder="Course"> -->
								Course:
								<select class="form-control" id="sr_course" name="sr_course">
								</select>
		                    </div>
                    	</div>
                    </div> 

                    <button class="btn btn-main" onclick="request_sr()" >Request</button>

                </form>
            </div>
        </div>
    </div>
</section>

<div class="google-map">
	<center>
   	 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.550433825609!2d121.15399471483383!3d14.044642090158431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6ed9735068d7%3A0x97fd25b226e150e7!2sBatangas%20State%20University%20Jose%20P.%20Laurel%20Polytechnic%20College!5e0!3m2!1sen!2sph!4v1630821791584!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    </center>
</div>
<!-- footer Start -->
	<?php include 'includes/footer.php'; ?>
<!-- footer End -->
   
    </div>

   <?php include 'includes/js_includes.php'; ?>

  </body>
  </html>
  <script>

	var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	optionCit();
	sr_optionCit();


	  request_sr = () => {
		let firstname = $('#sr_fname');
		let lastname = $('#sr_lastname');
		let middlename = $('#sr_middle');
		let email = $('#sr_email');
		let mobile = $('#sr_mobile');
		let address = $('#sr_address');
		let department = $('#sr_department');
		let course = $('#sr_course');
		let year_graduated = $('#year_graduated');


		
		if( (firstname.val() == '') || (lastname.val() == '') || (email.val() == '') || (department.val() == '') || (middlename.val() == '') || (mobile.val() == '') || (address.val() == '') || (course.val() == '') || (year_graduated.val() == '') ) 
		{

			alert("All fields are required!");
		}
		else if (!testEmail.test(email.val()))
		{
			
			alert("Please check email format!");	

		}
		else
		{

			$.ajax({
				url: './methods/ajaxCall.php',
				method: 'post',
				dataType: 'text',
				data: {
					key: 'request_srcode',
					firstname: firstname.val(),
					lastname: lastname.val(),
					middlename: middlename.val(),
					email: email.val(),
					mobile: mobile.val(),
					address: address.val(),
					department: department.val(),
					course: course.val(),
					year_graduated: year_graduated.val()
				}, success: (response) => {
					alert(response)
				}
			})	
		}

	  }

	   register = () => {
		var today = new Date();
        var currentDate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var srCode = $('#sr_code').val();

		let firstname = $('#firstname');
		let lastname = $('#lastname');
		let middlename = $('#middlename');
		let email = $('#email');
		let mobile = $('#mobile');
		let address = $('#address');
		let department = $('#department');
		let course = $('#course');
		let sr_code = $('#sr_code');
		let password = $('#password');
		let employment_status = $("#employment_status");

	if( (firstname.val() == '') || (lastname.val() == '') || (email.val() == '') || (department.val() == '') || (employment_status.val() == '') || (password.val() == '') || (middlename.val() == '') || (mobile.val() == '') || (address.val() == '') || (course.val() == '') || (sr_code.val() == '') ) {

		alert("All fields are required!");
	}
	else if (!testEmail.test(email.val()))
	{
		
		alert("Please check email format!");	

	} else {
	
		// alert("firstname : "+firstname.val());
		$.ajax({
			url: './methods/ajaxCall.php',
			method: 'post',
			dataType: 'text',
			data: {
				key: 'registerUser',
				firstname: firstname.val(),
				lastname: lastname.val(),
				middlename: middlename.val(),
				email: email.val(),
				mobile: mobile.val(),
				address: address.val(),
				department: department.val(),
				sr_code: sr_code.val(),
				password: password.val(),
				course: course.val(),
				employment_status: employment_status.val(),
				currentDate: currentDate,
			}, success: (response) => {
				alert(response)
				window.location = ' alumni-tracking.php?sr_code='+srCode;
			}
		})
	}
		
	  }



	  $('#department').on('change',function(){
			var departmentValue = $(this).val();
			// alert(departmentValue);
		  	if (departmentValue == 'cit' ) 
		  	{
		  		optionCit();
		    }
		  	else if (departmentValue == 'cecs' ) 
		  	{
		  		optionCecs();
		    }
		  	else if (departmentValue == 'cte' ) 
		  	{
		  		optionCte();
		    }
		  	else if (departmentValue == 'cas' ) 
		  	{
		  		optionCas();
		    }
		  	else if (departmentValue == 'cab' ) 
		  	{
		  		optionCab();
		    }
		  	else if (departmentValue == 'cics' ) 
		  	{
		  		optionCics();
		    }
		});


	// $('#course').on('change',function(){
	// 	var courseValue = $(this).val();
	// 	alert(courseValue);
	// });


	function optionCit()
	{
		$('#course').find('option').remove();
		$("#course").append(new Option("AUTOMOTIVE TECHNOLOGY", "AUTOMOTIVE TECHNOLOGY"));
		$("#course").append(new Option("CIVIL TECHNOLOGY", "CIVIL TECHNOLOGY"));
		$("#course").append(new Option("COMPUTER TECHNOLOGY", "COMPUTER TECHNOLOGY"));
		$("#course").append(new Option("DRAFTING TECHNOLOGY", "DRAFTING TECHNOLOGY"));
		$("#course").append(new Option("ELECTRICAL TECHNOLOGY", "ELECTRICAL TECHNOLOGY"));
		$("#course").append(new Option("ELECTRONICS TECHNOLOGY", "ELECTRONICS TECHNOLOGY"));
		$("#course").append(new Option("FOOD TECHNOLOGY", "FOOD TECHNOLOGY"));
		$("#course").append(new Option("MECHANICAL TECHNOLOGY ", "MECHANICAL TECHNOLOGY "));
		$("#course").append(new Option("MECHATRONICS TECHNOLOGY", "MECHATRONICS TECHNOLOGY"));

	}
	function optionCecs()
	{
		$('#course').find('option').remove();
		$("#course").append(new Option("BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING", "BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN MECHATRONICS ENGINEERING", "BACHELOR OF SCIENCE IN MECHATRONICS ENGINEERING"));
	}
	function optionCas()
	{
		$('#course').find('option').remove();
		$("#course").append(new Option("BS CRIMINOLOGY", "BS CRIMINOLOGY"));
		$("#course").append(new Option("BS PSYCHOLOGY", "BS PSYCHOLOGY"));
	}
	function optionCte()
	{
		$('#course').find('option').remove();
		$("#course").append(new Option("BACHELOR OF ELEMENTARY EDUCATION", "BACHELOR OF ELEMENTARY EDUCATION"));
		$("#course").append(new Option("BACHELOR OF PHYSICAL EDUCATION", "BACHELOR OF PHYSICAL EDUCATION"));
		$("#course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH", "BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH"));
		$("#course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN FILIPINO", "BACHELOR OF SECONDARY EDUCATION MAJOR IN FILIPINO"));
		$("#course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS", "BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS"));
		$("#course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN SCIENCES", "BACHELOR OF SECONDARY EDUCATION MAJOR IN SCIENCES"));
		$("#course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN SOCIAL STUDIES", "BACHELOR OF SECONDARY EDUCATION MAJOR IN SOCIAL STUDIES"));

	}
	function optionCab()
	{
		$('#course').find('option').remove();
		$("#course").append(new Option("BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT", "BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN FINANCIAL MANAGEMENT", "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN FINANCIAL MANAGEMENT"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE MANAGEMENT", "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE MANAGEMENT"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT", "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN MANAGEMENT ACCOUNTING ", "BACHELOR OF SCIENCE IN MANAGEMENT ACCOUNTING "));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT", "BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT"));
	}
	function optionCics()
	{
		$('#course').find('option').remove();
		$("#course").append(new Option("BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- BUSINESS ANALYTICS", "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- BUSINESS ANALYTICS"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- SERVICE MANAGEMENT", "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- SERVICE MANAGEMENT"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- NETWORK TECHNOLOGY", "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- NETWORK TECHNOLOGY"));
		$("#course").append(new Option("BACHELOR OF SCIENCE IN COMPUTER SCIENCE", "BACHELOR OF SCIENCE IN COMPUTER SCIENCE"));

	}




	  $('#sr_department').on('change',function(){
			var departmentValue = $(this).val();
			// alert(departmentValue);
		  	if (departmentValue == 'cit' ) 
		  	{
		  		sr_optionCit();
		    }
		  	else if (departmentValue == 'cecs' ) 
		  	{
		  		sr_optionCecs();
		    }
		  	else if (departmentValue == 'cte' ) 
		  	{
		  		sr_optionCte();
		    }
		  	else if (departmentValue == 'cas' ) 
		  	{
		  		sr_optionCas();
		    }
		  	else if (departmentValue == 'cab' ) 
		  	{
		  		sr_optionCab();
		    }
		  	else if (departmentValue == 'cics' ) 
		  	{
		  		sr_optionCics();
		    }
		});


	// $('#course').on('change',function(){
	// 	var courseValue = $(this).val();
	// 	alert(courseValue);
	// });


	function sr_optionCit()
	{
		$('#sr_course').find('option').remove();
		$("#sr_course").append(new Option("AUTOMOTIVE TECHNOLOGY", "AUTOMOTIVE TECHNOLOGY"));
		$("#sr_course").append(new Option("CIVIL TECHNOLOGY", "CIVIL TECHNOLOGY"));
		$("#sr_course").append(new Option("COMPUTER TECHNOLOGY", "COMPUTER TECHNOLOGY"));
		$("#sr_course").append(new Option("DRAFTING TECHNOLOGY", "DRAFTING TECHNOLOGY"));
		$("#sr_course").append(new Option("ELECTRICAL TECHNOLOGY", "ELECTRICAL TECHNOLOGY"));
		$("#sr_course").append(new Option("ELECTRONICS TECHNOLOGY", "ELECTRONICS TECHNOLOGY"));
		$("#sr_course").append(new Option("FOOD TECHNOLOGY", "FOOD TECHNOLOGY"));
		$("#sr_course").append(new Option("MECHANICAL TECHNOLOGY ", "MECHANICAL TECHNOLOGY "));
		$("#sr_course").append(new Option("MECHATRONICS TECHNOLOGY", "MECHATRONICS TECHNOLOGY"));

	}
	function sr_optionCecs()
	{
		$('#sr_course').find('option').remove();
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING", "BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN MECHATRONICS ENGINEERING", "BACHELOR OF SCIENCE IN MECHATRONICS ENGINEERING"));
	}
	function sr_optionCas()
	{
		$('#sr_course').find('option').remove();
		$("#sr_course").append(new Option("BS CRIMINOLOGY", "BS CRIMINOLOGY"));
		$("#sr_course").append(new Option("BS PSYCHOLOGY", "BS PSYCHOLOGY"));
	}
	function sr_optionCte()
	{
		$('#sr_course').find('option').remove();
		$("#sr_course").append(new Option("BACHELOR OF ELEMENTARY EDUCATION", "BACHELOR OF ELEMENTARY EDUCATION"));
		$("#sr_course").append(new Option("BACHELOR OF PHYSICAL EDUCATION", "BACHELOR OF PHYSICAL EDUCATION"));
		$("#sr_course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH", "BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH"));
		$("#sr_course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN FILIPINO", "BACHELOR OF SECONDARY EDUCATION MAJOR IN FILIPINO"));
		$("#sr_course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS", "BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS"));
		$("#sr_course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN SCIENCES", "BACHELOR OF SECONDARY EDUCATION MAJOR IN SCIENCES"));
		$("#sr_course").append(new Option("BACHELOR OF SECONDARY EDUCATION MAJOR IN SOCIAL STUDIES", "BACHELOR OF SECONDARY EDUCATION MAJOR IN SOCIAL STUDIES"));

	}
	function sr_optionCab()
	{
		$('#sr_course').find('option').remove();
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT", "BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN FINANCIAL MANAGEMENT", "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN FINANCIAL MANAGEMENT"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE MANAGEMENT", "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE MANAGEMENT"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT", "BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN MANAGEMENT ACCOUNTING ", "BACHELOR OF SCIENCE IN MANAGEMENT ACCOUNTING "));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT", "BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT"));
	}
	function sr_optionCics()
	{
		$('#sr_course').find('option').remove();
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- BUSINESS ANALYTICS", "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- BUSINESS ANALYTICS"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- SERVICE MANAGEMENT", "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- SERVICE MANAGEMENT"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- NETWORK TECHNOLOGY", "BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY- NETWORK TECHNOLOGY"));
		$("#sr_course").append(new Option("BACHELOR OF SCIENCE IN COMPUTER SCIENCE", "BACHELOR OF SCIENCE IN COMPUTER SCIENCE"));

	}


  </script>