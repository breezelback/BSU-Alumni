<?php 
$sql = $database->conn->query("SELECT * FROM user_information where account_status != 'user'");

?>
<div class="container-fluid">
<table class="table" id="alluser_table">
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
        <th scope="row" id="<?php echo "user_".$row['id']; ?>"><?php echo $row["name"]. " " .$row["lastname"]; ?></th>
        <td><?php echo $row["sr_code"]; ?></td>
        <td><?php echo $row["course"]; ?></td>
        <td>
            <button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button class="btn btn-danger btn-sm" onclick="delete_user(<?php echo $row['id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </td>
        </tr>
    <?php endwhile; ?>

  </tbody>
</table>
</div>
