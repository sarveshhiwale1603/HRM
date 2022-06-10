<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
$name=$_SESSION['name'];
$id=$_SESSION['id'];

$query=mysqli_query($conn,"SELECT * FROM employee WHERE fname='$name'");
$row=mysqli_fetch_array($query);
$id1=$row['id'];
$name1=$row['fname'];
$last1=$row['lname'];
$image=$row['image'];
$emp_shift=$row['shift'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3| Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include("../include/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <?php if(isset($name)){ ?>
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6">
        <div class="card proj-t-card ">
          <div class="card-body">
            <div class="row align-items-center m-b-30">
              <div class="col-auto"> 
              </div>
              <div class="col p-l-0">
                <h6 class="m-b-5"><b style="color:black;font-size:18px">Welcome <?php echo $name; ?></b></h6>
                <?php

                $day=date("l");
                $sql1=mysqli_query($conn,"SELECT * FROM shift_time WHERE shift='$emp_shift'");
                $arr=mysqli_fetch_array($sql1);
                if($day=="Monday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">My Shift:&nbsp;'. $arr['monday_start_time'].' To '. $arr['monday_end_time'].'</h6>';
                }else if($day=="Tuesday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">My Shift:&nbsp;'. $arr['tuesday_start_time'].' To '. $arr['tuesday_end_time'].'</h6>';
                }else if($day=="Wednesday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">My Shift:&nbsp;'. $arr['wednesday_start_time'].' To '. $arr['wednesday_end_time'].'</h6>';
                }else if($day=="Thursday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">My Shift:&nbsp;'. $arr['thursday_start_time'].' To '. $arr['thursday_end_time'].'</h6>';
                }else if($day=="Friday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">My Shift:&nbsp;'. $arr['friday_start_time'].' To '. $arr['friday_end_time'].'</h6>';
                }else if($day=="Saturday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">My Shift:&nbsp;'. $arr['saturday_start_time'].' To '. $arr['saturday_end_time'].'</h6>';
                }else if($day=="Sunday"){
                  echo '<h6 class="m-b-0 mt-2 text-primary">Today: Holiday</h6>';
                }
                ?>
                <!-- <h6 class="m-b-0 mt-2 text-primary">My Shift: <?php// echo $arr['']; ?> To 06:17 pm</h6> -->
              </div>
            </div>
            			            <form id="hr_clocking" autocomplete="off" class="m-b-1" method="post" accept-charset="utf-8">
                                <input type="hidden" value="clock_out" name="clock_state" id="clock_state">
            <input type="hidden" value="<?php echo $id1; ?>" name="time_id" id="time_id">
            <input type="hidden" value="<?php echo $name1.' '.$last1; ?>" name="name" id="time_id">
            <div class="row align-items-center text-center">
              <div class="col mt-4">
                <h6 class="m-b-0">                
                  <button type="submit" id="clock_in" name="clock-in" class="btn waves-effect waves-light btn-sm btn-success">Clock IN <i class="fas fa-long-arrow-alt-right m-r-10"></i></button>
                </h6>
              </div>
              <div class="col mt-4">
                <h6 class="m-b-0">
                  <button type="submit" id="clock_out" name="clock-out" class="btn waves-effect waves-light btn-sm btn-secondary" type="submit" >Clock OUT <i class="fas fa-long-arrow-alt-down m-r-10"></i></button>
                </h6>
              </div>
            </div>
            			<div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>            <h6 class="pt-badge badge-light-success">MANAGER</h6>
          </div>
          <a href="attendance.php" class="btn btn-primary btn-sm btn-round">My Attendance <i class="fas fa-long-arrow-alt-right m-r-10"></i></a>
        </div>
      </div>
    </div>
                              </div>

  <?php }  ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("../include/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script> 
                  $(document).ready(function(){
                    $("#clock_out").prop('disabled',true);
                  });
                 
                  </script>
<?php
              if(isset($_POST['clock-in'])){
                $emp_id=$_POST['time_id'];
                 $emp_name=$_POST['name'];
                date_default_timezone_set('Asia/Kolkata');
                $date=date("Y.m.d");
                $time=date("H:i A");
                $status=1;

                $query=mysqli_query($conn,"select * from attendance where date='$date' and employee_name='$emp_name'");
                if(mysqli_num_rows($query)>0){
                  echo "<script>alert('Attendence already submitted')</script>";?>
                   <script>
                  $(document).ready(function(){
                    $("#clock_in").prop('disabled',true);
                    $("#clock_out").prop('disabled',false);
                  });
                  </script>

              <?php }else{
                $sql=mysqli_query($conn,"INSERT INTO `attendance`( `date`,`clock_in`, `employee_id`,`employee_name`,`status`) VALUES ('$date','$time','$emp_id','$emp_name','$status')");
                if($sql){
                  echo "<script>swal('Success','You have clocked in successfully','success');</script>";?>
                  <script>
                  $(document).ready(function(){
                    $("#clock_in").prop('disabled',true);
                    $("#clock_out").prop('disabled',false);
                  });
                  </script>
                <?php }
                else{
                  echo "<script>swal('Error','Something went wrong. Please try again','error');</script>";?>
                  <script>
                  $(document).ready(function(){
                    $("#clock_in").prop('disabled',false);
                    $("#clock_out").prop('disabled',true);
                  });
                  </script>
              <?php  } }
              }

              if(isset($_POST['clock-out'])){
                date_default_timezone_set('Asia/Kolkata');
                $date=date("Y-m-d");
                $time=date("H:i A");
                $emp_name=$_POST['name'];
                
                $sql1=mysqli_query($conn,"UPDATE `attendance` SET `clock_out`='$time' WHERE employee_name='$emp_name' AND date='$date'");
                if($sql1){
                  echo "<script>swal('Success','You have clocked out successfully','success');</script>";?>
                <script>
                  $(document).ready(function(){
                    $("#clock_in").prop('disabled',false);
                    $("#clock_out").prop('disabled',true);
                  });
                  </script>
              <?php }
                else{
                  echo "<script>swal('Error','Something went wrong. Please try again','error');</script>";?>
                  <script>
                  $(document).ready(function(){
                    $("#clock_in").prop('disabled',true);
                    $("#clock_out").prop('disabled',false);
                  });
                  </script>
               <?php }
              }

              ?>
</body>
</html>
