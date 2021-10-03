<section class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <ul id="tabs" class="nav nav-tabs">
                <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase">List of forum</a></li>
                <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase active">Post forum</a></li>
            </ul>
            <br>
            <div id="tabsContent" class="tab-content">
                <div id="home1" class="tab-pane fade">
             
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

                </div>
                <div id="profile1" class="tab-pane fade active show">
                <div class="container">

                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" class="form-control" id="topic" style="border: .5px solid black;">
                    <small id="emailHelp" class="form-text text-muted">Make sure be specific on your topic.</small>
                  </div>

                <div class="form-group">
                  <label for="description" class="form-label">Description(Optional)</label>
                  <textarea class="form-control" id="description" rows="3" style="border: .5px solid black; height: 100px!important;"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-md" onclick="publishForum()">Publish <i class="fa fa-file" aria-hidden="true"></i></button>
                </div>


                </div>
                </div>

            </div>
        </div>
    </div>
</section>
