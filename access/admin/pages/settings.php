<?php 
$myId = $_SESSION['id'];
$query = 'SELECT * FROM user_information WHERE id = '.$myId.'';
$stmt = $database->conn->query($query);

$row = $stmt->fetch_array();
$count = $stmt->num_rows;

?>

<style>
  .form-control {
      border: 1px solid black;
  }
  h2{
    font-weight: bold;
  }

  .container {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px #888888;
  }

  .field-icon {
        float: right;
        margin-left: -30px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
    }

</style>
<div class="container" style="border: 1px solid black; border-radius: 20px; margin-top: 3rem;">
     <h2 class="text-center mt-3 mb-3" >Account Settings</h2>
    <input type="hidden" value="<?php echo $myId; ?>" id="accountID">

    <div class="row justify-content-center">
        <div class="form-group">
                    <p class="text-center">
                <img src="<?php echo($row['profile_pic'] == '') ?  './profile_pic/default.png' : './profile_pic/'.$row['profile_pic']; ?>" class="img" style="width: 200px; height: 200px;" id="image_add" name="image" >
                    </p>
                    <input type="hidden" id="default_image" value="<?php echo $row['profile_pic']; ?>">
        </div>


    </div>

    <div class="row justify-content-center">
    <div class="form-group">
        <input type="file" name="file_add" id="file_add"  />
        </div>
  </div>

    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" value="<?php echo $row['name']; ?>">
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="middle_name">Middle name</label>
                    <input type="text" id="middle_name" class="form-control" value="<?php echo $row['middle_name']; ?>" >
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" class="form-control" value="<?php echo $row['email_address']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
        <div class="form-group">
                <label for="course">Course</label>
                <input type="text" id="course" class="form-control" value="<?php echo $row['course']; ?>" >
            </div>
        </div>
        <div class="col col-md-3">
        <div class="form-group">
        <label for="department">Department</label>
                <input type="text" id="department" class="form-control" value="<?php echo $row['department']; ?>" >
        </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
    
        </div>
        <div class="col col-md-3">
                <div class="form-group">
                        <label for="password">Password</label>
                        <input  type="password" id="password" class="form-control" name="password" value="<?php echo $row['account_password']; ?>">
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
        </div>
        <div class="col col-md-3">
                <!-- <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="text" id="contactNumber" class="form-control" value="<?php echo $row['contact_number']; ?>" >
                </div> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-md-3">
            <!-- <div class="form-group">
                <label for="idNumber">ID Number</label>
                <input type="text" id="idNumber" class="form-control" value="<?php echo $row['id_number']; ?>" >
            </div> -->
        </div>
        <div class="col col-md-3">
                <!-- <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" value="<?php echo $row['email']; ?>" >
                </div> -->
        </div>
        <div class="col col-md-3">

        </div>
    </div>

    <div class="row mb-5 mt-3 justify-content-center">
        <button class="btn btn-primary mr-2" onclick="updateAccount(<?php echo $_SESSION['id']; ?>)">Save Changes</button>
        <!-- <button class="btn btn-danger" onclick="reset()">Reset</button> -->
    </div> 

</div>
<!-- <script>

function updateAccount() {
    let name = $('#name').val();
    let lastname = $('#lastname').val();
    let address = $('#address').val();
    let middleName = $('#middleName').val();
    let gender = $('#gender').val();
    let age = $('#age').val();
    let username = $('#username').val();
    let password = $('#password').val();
    let contactNumber = $('#contactNumber').val();
    let idNumber = $('#idNumber').val();
    let email = $('#email').val();
    let id = $('#accountID').val();

    $.ajax({
        url: '../../functions/fetchAjax.php',
        method: 'post',
        dataType: 'text',
        data: {
            key: "updateAccount",
            myId : id,
            name : name,
            lastname: lastname,
            address: address,
            middleName: middleName,
            gender : gender,
            age : age,
            username : username,
            password : password,
            contactNumber : contactNumber,
            idNumber : idNumber,
            email : email,

        }, success : function(res) {
            Alt.alternative({
            status:'success',
            title:'Success',
            text:res
            }).then((res) => {
                setTimeout(() => {
                    location.reload();
                }, 1000);
            })
        }

    })

}

function test() {
    let name = $('#name').val();
    let id = $('#myId').val();

    // alert(id);
    $.ajax({
        url: '../../functions/fetchAjax.php',
        method: 'post',
        dataType: 'text',
        data: {
            key: "test",
            name: id
        }, success : function(res) {
            alert(res);
        }

    })

}

function reset() {
    $('#name').val('');
    $('#lastname').val('');
    $('#address').val('');
     $('#middleName').val('');
     $('#gender').val('');
    $('#age').val('');
     $('#username').val('');
     $('#password').val('');
    $('#contactNumber').val('');
     $('#idNumber').val('');
     $('#email').val('');

}




</script> -->