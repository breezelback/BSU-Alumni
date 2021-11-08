<?php 
$sql = $database->conn->query(" SELECT `id`, `user_id`, `degree`, `program`, `year_graduated`, `masters_program`, `masters_school`, `name`, `age`, `gender`, `civil_status`, `address`, `is_employed`, `working_status`, `company_name`, `position`, `company_address`, `employment_status`, `status`, `date_uploaded` FROM `tbl_tracking` ");

?>
<div class="container-fluid">
<table class="table" id="tracking_table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Degree</th>
      <th scope="col">Course</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $sql->fetch_array()): ?>
        <tr>
        <td scope="row" id="<?php echo "tracking_".$row['id']; ?>"><?php echo $row["name"]; ?></td>
        <td><?php echo $row["degree"]; ?></td>
        <td><?php echo strtoupper($row["program"]); ?></td>
        <td>
            <button class="btn btn-primary btn-sm" onclick="view_alumni_tracking(<?php echo $row['id']; ?>)"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button class="btn btn-danger btn-sm" onclick="delete_alumni_tracking(<?php echo $row['id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </td>
        </tr>
    <?php endwhile; ?>

  </tbody>
</table>
</div>

<style>
  .form-control {
    border: 1px solid black;
  }
</style>

<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

<div class="modal fade bd-example-modal-lg" id="view_alumni_tracking" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">View Alumni </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">

        <div class="container-fluid">
          <input type="hidden" id="user_id">

        <div class="row">
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="name">Degree <span>*</span></label>
                    <input type="text" id="degree" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="lastname">Program <span>*</span></label>
                    <input type="text" id="program"  class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="emiddle_name">Year Graduated <span>*</span></label>
                    <input type="text" id="year_graduated" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-4">
            <div class="form-group">
                    <label for="sr_number">Master's Program <span>*</span></label>
                    <input type="text" id="masters_program" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="email">Master's/PhD School <span>*</span></label>
                    <input type="text" id="masters_school" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="course">Name <span>*</span></label>
                    <input type="text" id="name" class="form-control">
                </div>
            </div>
        </div>       

        <div class="row">
            <div class="col col-md-4">
            <div class="form-group">
                    <label for="sr_number">Age <span>*</span></label>
                    <input type="text" id="age" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="email">Gender <span>*</span></label>
                    <input type="text" id="gender" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="course">Civil Status <span>*</span></label>
                    <input type="text" id="civil_status" class="form-control">
                </div>
            </div>
        </div>    

        <div class="row">
            <div class="col col-md-6">
            <div class="form-group">
                    <label for="sr_number">Address <span>*</span></label>
                    <input type="text" id="address" class="form-control">
                </div>
            </div>
            <div class="col col-md-3">
                <div class="form-group">
                    <label for="email">Employed? <span>*</span></label>
                    <input type="text" id="is_employed" class="form-control">
                </div>
            </div>
            <div class="col col-md-3">
                <div class="form-group">
                    <label for="course">Working Status <span>*</span></label>
                    <input type="text" id="working_status" class="form-control">
                </div>
            </div>
        </div>   

        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="sr_number">Company Name <span>*</span></label>
                    <input type="text" id="company_name" class="form-control">
                </div>
            </div>
            <div class="col col-md-3">
                <div class="form-group">
                    <label for="email">Position <span>*</span></label>
                    <input type="text" id="position" class="form-control">
                </div>
            </div>
            <div class="col col-md-3">
                <div class="form-group">
                    <label for="sr_number">Employment Status <span>*</span></label>
                    <input type="text" id="employment_status" class="form-control">
                </div>
            </div>
        </div>   

        <div class="row">
            <div class="col col-md-8">
                <div class="form-group">
                    <label for="course">Company Address <span>*</span></label>
                    <input type="text" id="company_address" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="course">Date Uploaded <span>*</span></label>
                    <input type="text" id="date_uploaded" class="form-control">
                </div>
            </div>
        </div>     
            


        <!-- end modal body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

