<?php 
$sql = $database->conn->query("SELECT * FROM sr_request ORDER BY id DESC");

?>
<div class="container">
  <table class="table" id="alluser_table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Fullname</th>
        <th scope="col">Department</th>
        <th scope="col">Course</th>
        <th scope="col">Address</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Year Graduated</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $sql->fetch_array()): ?>
          <tr id="sr_<?php echo $row['id']; ?>">
          <th scope="row"><?php echo $row["name"]. " " .$row["lastname"]; ?></th>
          <td><?php echo $row["department"]; ?></td>
          <td><?php echo $row["course"]; ?></td>
          <td><?php echo $row["address"]; ?></td>
          <td><?php echo $row["mobile_no"]; ?></td>
          <td><?php echo $row["year_graduated"]; ?></td>
  
          <td>
            <center>
              <button class="btn btn-primary btn-sm" onclick="modalForSrForm(<?php echo $row['id'] ?>)">Send SR code</button>
              <!-- <button class="btn btn-success btn-sm">View</button> -->
              <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
            </center>
          </td>
          </tr>
      <?php endwhile; ?>
  
    </tbody>
  </table>

</div>

<div class="modal d-example-modal-md" id="send_sr_request" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SR Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Name : <b id="fullname"></b></p>
        <p>Send to : <b id="email"></b></p>
            <input type="hidden" id="email_hidden">
            <input type="hidden" id="name_hidden">
            <input type="hidden" id="id_hidden">

            <div class="form-group mr-4">
                <label>Enter SR Code</label>
                <input type="text" id="sr_code_input" class="form-control" style="border: 1px solid black;">
            </div>
            <p>Note : After the request successfully send this request will be deleted.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="send_sr_code()">Send</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    function modalForSrForm(id) {
    $.ajax({ 
      url: './../../methods/ajaxCall.php',
      method: 'post',
      dataType: 'json',
      data: {
        key: 'get_selected',
        id: id
      }, success: function(response) {
        document.getElementById("email").innerHTML = response.email;
        document.getElementById("fullname").innerHTML = response.fullname;
        document.getElementById("email_hidden").value = response.email;
        document.getElementById("name_hidden").value = response.fullname;
        document.getElementById("id_hidden").value = id;
        // alert(response);
        $('#send_sr_request').modal('show');
      }
    });
   }

    send_sr_code = () => {
       let email =  $('#email_hidden').val();
       let srCode = $('#sr_code_input').val();
       let fullname = $('#name_hidden').val();
       let id = $('#id_hidden').val();

    if(srCode == ''){
        alert("Please input SR code before send");
    } else {}
    $.ajax({
      url: './../../methods/ajaxCall.php',
      method: 'post',
      dataType: 'text',
      data: {
        key: 'send_sr_code',
        email: email,
        srCode: srCode,
        name: fullname,
        id: id
      }, success: function(response) {
           $('#sr_'+id).remove(); 
           alert(response);
           $('#sr_code_input').val('');
           $('#send_sr_request').modal('toggle');

      }
      
    });
   }
</script>