<div class="container-fluid">



</div>



<section class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <ul id="tabs" class="nav nav-tabs">
                <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase">Post jobs</a></li>
                <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase active">Job list</a></li>
            </ul>
            <br>
            <div id="tabsContent" class="tab-content">
                <div id="home1" class="tab-pane fade">
                   
                <div class="form-group">
                    <label for="">Job title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control" style="border: 1px solid black;">
                </div>

                <div class="form-group">
                    <label for="">Company</label>
                    <input type="text" name="company" id="company" class="form-control" style="border: 1px solid black;">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label"> Job Description</label>
                    <textarea class="form-control" id="job_description" rows="5" style="border: .5px solid black; height: 100px!important;"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Salary(Optional)</label>
                    <input type="text" name="job_title" id="job_salary" class="form-control" style="border: 1px solid black; width: 50%;">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-md" onclick="post_job()">Post job <i class="fa fa-file" aria-hidden="true"></i></button>
                </div>


                </div>
                <div id="profile1" class="tab-pane fade active show">
                <?php 
                $sql = $database->conn->query("SELECT * FROM jobs");

                ?>
                <div class="container-fluid">
                <table class="table" id="job_table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Job title</th>
                    <th scope="col">Date posted</th>
                    <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $sql->fetch_array()): ?>
                        <tr>
                        <th scope="row" id="<?php echo "job_".$row['id']; ?>"><?php echo $row["title"]; ?></th>
                        <td><?php echo $row["date_posted"]; ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="open_job_information_modal(<?php echo $row['id']; ?>)"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            <button class="btn btn-danger btn-sm" onclick="delete_job(<?php echo $row['id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </td>
                        </tr>
                    <?php endwhile; ?>

                </tbody>
                </table>
                </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="job_information" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit job information </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
                    <input type="hidden"  id="jobId">
        <div class="form-group">
                    <label for="">Job title</label>
                    <input type="text" name="job_title" id="job_title_edited" class="form-control" style="border: 1px solid black;">
                </div>

                <div class="form-group">
                    <label for="">Company</label>
                    <input type="text" name="company" id="company_edited" class="form-control" style="border: 1px solid black;">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label"> Job Description</label>
                    <textarea class="form-control" id="job_description_edited" rows="5" style="border: .5px solid black; height: 100px!important;"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Salary(Optional)</label>
                    <input type="text" name="job_title" id="job_salary_edited" class="form-control" style="border: 1px solid black; width: 50%;">
                </div>             
            


        <!-- end modal body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="save_edited_job()">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>