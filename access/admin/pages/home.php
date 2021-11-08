<?php

$user_count = $database->conn->query('SELECT COUNT(id) as total_user FROM user_information WHERE account_status != "user"');
$total_user = $user_count->fetch_array();

$forum_count = $database->conn->query('SELECT COUNT(id) as total_forum FROM forum');
$total_forum = $forum_count->fetch_array();

$unregister_count = $database->conn->query('SELECT COUNT(id) as total_unregister FROM user_information WHERE account_status = "user"');
$total_unregister = $unregister_count->fetch_array();

$job_count = $database->conn->query('SELECT COUNT(id) as total_job FROM jobs');
$total_job = $job_count->fetch_array();

?>


<div class="container-fluid">
<div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-handshake-o"></i>
        <span class="count-numbers">
            <?php echo $total_job['total_job']; ?>
        </span>
        <span class="count-name">Total Jobs Posted</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-users mr-3"></i>
        <span class="count-numbers">
        <!-- this is for total major patient -->
            <?php echo $total_unregister['total_unregister']; ?>
        </span>
        <span class="count-name">Total Request Register</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-comments mr-3"></i>
        <span class="count-numbers">
        <!-- this is for total minor patient -->
            <?php echo $total_forum['total_forum']; ?>
        </span>
        <span class="count-name">Number of Forum/s</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers">
        <!-- this is for total minor patient -->
            <?php echo $total_user['total_user']; ?>
        </span>
        <span class="count-name">System Users</span>
      </div>
    </div>
</div>

</div>
<div class="container" style="margin-top: 60px;">
<h2 class="text-center">User register</h2>
<div class="row">
  <div class="col-md-12">
    <canvas id="bar_chart"></canvas>
  </div>
</div>

</div>
<br>
<div class="container">
<h2 class="text-center">Degree</h2>
<div class="row">
  <div class="col-md-12">
    <canvas id="chart_for_degree"></canvas>
  </div>
</div>
</div>
<br>
<div class="container">
<div class="row" style="margin-top:  ;">
  <div class="col-lg-6">

      <div class="card" style="width: 30rem; height: 30rem;">
        <div class="card-body">
        <canvas id="pie_chart"></canvas>
        </div>
      </div>

  </div>
  <div class="col-lg-6">

  <div class="card" style="width: 30rem; height: 30rem;">
        <div class="card-body">
        <canvas id="pie_chart2"></canvas>
        </div>
    </div>

  </div>

        
</div>
</div>