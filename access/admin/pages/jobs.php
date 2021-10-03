<div class="container-fluid">

    <div class="form-group">
        <label for="">Job title</label>
        <input type="text" name="job_title" id="job_title" class="form-control" style="border: 1px solid black;">
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

