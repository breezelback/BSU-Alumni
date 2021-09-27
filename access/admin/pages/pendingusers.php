<?php 
$sql = $database->conn->query("SELECT * FROM user_information where account_status = 'user'");

?>
<div class="container">
  <table class="table" id="pending_user">
    <thead class="thead-light">
      <tr>
        <th scope="col">Fullname</th>
        <th scope="col">SR Code</th>
        <th scope="col">Course</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $sql->fetch_array()): ?>
          <tr>
          <th scope="row"><?php echo $row["name"]. " " .$row["lastname"]; ?></th>
          <td><?php echo $row["sr_code"]; ?></td>
          <td><?php echo $row["course"]; ?></td>
          <td class="text-center">
              <button class="btn btn-primary btn-sm">View <i class="fa fa-eye" aria-hidden="true"></i></button>
              
              <button type="button" class="btn btn-success btn-sm" onclick="modalOpenForAccountUpdate(<?php echo $row['id']; ?>)">
               Status <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              </button>
  
              <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
          </td>
          </tr>
      <?php endwhile; ?>
  
    </tbody>
  
    <div class="modal fade" id="accountStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
  
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        
              <div class="form-group">
                <label for=""><b>Update Account Status</b></label>
                <input type="hidden" id="userId">
                <select class="form-control" id="status" style="border:1px solid black">
                  <option value="user">User</option>
                  <option value="alumni">Alumni</option>
                  <option value="admin">Administrator</option>
  
                </select>
                <p class="text-center mt-2 text-success" style="font-weight:bold;" id="statusMessage"></p>
              </div>
  
  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" onclick="updateAccountStatus()">Save changes</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
  
  </table>
</div>
<script>
function modalOpenForAccountUpdate(id) {

$('#accountStatus').modal('show');
$('#userId').val(id);

}

function updateAccountStatus() {
  let status = document.getElementById('status').value;
  let accountId = document.getElementById('userId').value;

  if(status !== 'user') {
    $.ajax({ 
      url: './../../methods/ajaxCall.php',
      method: 'post',
      dataType: 'text',
      data: {
        key: 'updateAccountStatus',
        status: status,
        id: accountId
      }, success: function(response) {
        alert(response);
      }
    })

  } else {
    alert("Cannot update changes");
  }

}


</script>