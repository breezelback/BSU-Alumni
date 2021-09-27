<?php 
$sql = $database->conn->query("SELECT * FROM forum");

?>
<div class="container">
  <table class="table" id="pending_user">
    <thead class="thead-light">
      <tr>
        <th scope="col">Topic</th>
        <th scope="col">Date posted</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $sql->fetch_array()): ?>
          <tr>
          <th scope="row"><?php echo $row["topic"];?></th>
          <td><?php echo $row["date_created"]; ?></td>
          <td class="text-center">
              <button class="btn btn-primary btn-sm">Join</button>
              <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
          </td>
          </tr>
      <?php endwhile; ?>
  
    </tbody>
  
  </table>
</div>