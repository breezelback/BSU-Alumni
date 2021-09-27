<?php 
$sql = $database->conn->query("SELECT * FROM user_information where account_status = 'user'");

?>

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
            <button class="btn btn-success btn-sm">Approve <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
            <button class="btn btn-danger btn-sm">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
        </td>
        </tr>
    <?php endwhile; ?>

  </tbody>
</table>