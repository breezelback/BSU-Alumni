<?php 
$sql = $database->conn->query("SELECT `id`, `contact_name`, `contact_email`, `contact_message`, `status`, DATE_FORMAT(`date_uploaded`, '%M %d. %Y') AS date_uploaded FROM `tbl_contact_us`");

?>
<div class="container-fluid">
<table class="table" id="contact_us">
  <thead class="thead-light">
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Date Uploaded</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $sql->fetch_array()): ?>
        <tr>
        <th scope="row" id="<?php echo "user_".$row['id']; ?>"><?php echo $row["contact_name"]; ?></th>
        <td><?php echo $row["contact_email"]; ?></td>
        <td><?php echo $row["contact_message"]; ?></td>
        <td><?php echo $row["date_uploaded"]; ?></td>
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

<div class="modal fade bd-example-modal-lg" id="account_information" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Account </h5>
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
                    <label for="name">Name <span>*</span></label>
                    <input type="text" id="ename" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="lastname">Lastname <span>*</span></label>
                    <input type="text" id="elastname"  class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="emiddle_name">Middle Name <span>*</span></label>
                    <input type="text" id="emiddle_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-4">
            <div class="form-group">
                    <label for="sr_number">SR Number <span>*</span></label>
                    <input type="text" id="esr_number" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="email">Email Address <span>*</span></label>
                    <input type="text" id="eemail" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="course">course <span>*</span></label>
                    <input type="text" id="ecourse" class="form-control">
                </div>
            </div>
        </div>                
        <div class="row">
            <div class="col col-md-4">
            <div class="form-group">
                <label for="status">Status <span>*</span></label>
                <select class="form-control" id="estatus">
                    <option value="user">user</option>
                    <option value="alumni">Alumni</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            </div>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="department">Department <span>*</span></label>
                    <input type="text" id="edepartment" class="form-control">
                </div>
            </div>
            <div class="col col-md-4">
            <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" id="epassword" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
 

        </div>
            


        <!-- end modal body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="save_user()">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>

