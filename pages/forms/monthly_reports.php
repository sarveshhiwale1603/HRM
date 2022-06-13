<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}

    if(isset($_POST['submit']))
    {
        $employee = $_POST['employee_name'];
        $attendance_date = $_POST['attendance_date'];
        $in_time = $_POST['in_time'];
        $out_time = $_POST['out_time'];
       
        $sql="INSERT INTO `attendance`(`employee_name`,`date`,`clock_in`,`clock_out`)VALUES ('$employee','$attendance_date','$in_time','$out_time')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      
    }
    if(isset($_GET['delid'])){
      $id=mysqli_real_escape_string($conn,$_GET['delid']);
      $sql=mysqli_query($conn,"delete from attendance where id='$id'");
      if($sql=1){
          header("location:manual-attendance.php");
      }
      }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRM | ATTENDANCE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
 <!-- Select2 -->
 <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

 <style>
    .hoverTitles{
      color: black;
      cursor: pointer;
      font-weight: 500;
      font-size: small;

    }
    .hoverTitles:hover{
      color: blueviolet !important;
    }
  </style>
</style>
</head>
<body>
<div class="wrapper">

<?php include("../include/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Monthly Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 grid-margin">
                <div class="card-body">
                  <a href="attendance.php">
                  <div class="d-flex flex-row align-items-start hoverTitles">
                  
                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg far fa-clock"></i>
                    <div class="ms-3">
                        <p class="pb-0 mb-0" style="line-height:1;">Attendance</p>
                          <small class="text-muted small pt-0 mt-0">View Attendance</small>
                      
                    </div>
                  
                </div>
              </a>
                </div>
            </div>

          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card-body">
                  <a href="manual-attendance.php">
                    <div class="d-flex flex-row align-items-start hoverTitles">
                    
                      <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-edit"></i>
                      <div class="ms-3">
                          <p class="pb-0 mb-0" style="line-height:1;">Manual Attendance </p>
                            <small class="text-muted small pt-0 mt-0">Add/Edit Attendance</small>
                        
                      </div>
                    
                  </div>
                </a>
            </div>
        </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-md-3 grid-margin">
            <div class="card-body">
              <a href="monthly-Report.php">
                <div class="d-flex flex-row align-items-start hoverTitles active1">
                  <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg 	far fa-calendar"></i>
                  <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Monthly Report</p>
                        <small class="text-muted small pt-0 mt-0">View Monthly Report</small>
                  </div>
              </div>
            </a>
            </div>
        </div>
          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card-body">
              <a href="overtime-Request.php">
                <div class="d-flex flex-row align-items-start hoverTitles">
                  <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fa fa-bars"></i>
                  <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Overtime Request</p>
                        <small class="text-muted small pt-0 mt-0">Set up Overtime Request</small>
                  </div>
              </div>
            </a>
            </div>
        </div>
          <!-- /.col -->
        </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- Info boxes -->
       
        <div class="row m-b-1 animated fadeInRight">
            <div class="col-md-12">
            <div class="card">
                 
            <div class="card-body">
                        <form  name="monthly_attendance_report" id="monthly_attendance" method="POST" target="_blank" accept-charset="utf-8">

<input type="hidden" name="token" value="Fz_AyLwOV2us1sMr2Jv597ekDXKE7pyY8LgW_0flA2s" style="display:none;">
        <div class="row justify-content-center">
          <div class="col-sm-12">
            <div class="row align-items-center">
              <div class="col">
                <label for="department">
                  Employee                </label>
                  <?php 
                   $query=mysqli_query($conn,"select * from employee");
                   ?>
 
                       <select class="form-control select2" name="employee_name" style="width: 100%;">
                         <option selected="selected">select</option>
                         <?php
                    while($sql=mysqli_fetch_array($query))
                    {
                      ?>
 
                         <option value="<?php echo $sql['fname'].' '.$sql['lname']; ?>"> <?php echo $sql['fname'].' '.$sql['lname']; ?></option>
                         <?php } ?>
                       </select>
                              </div>
              <div class="col">
                <label class="form-label">
                  Month                </label>
                <input class="form-control hr_month_year hasDatepicker" placeholder=" Month" name="M" type="text"  id="dp1654938760845">
              </div>
              <div class="col">
                <label class="form-label">&nbsp;</label>
                <br>
                <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span><span class="ladda-spinner"></span></button>
              </div>
            </div>
          </div>
        </div>
        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div></form>      </div>
                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php include("../include/footer.php") ?>         
                    </div>

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script type="text/javascript">var dt_infoFiltered = '(filtered from _MAX_ total records)';</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script>
  function filter(){
   starttime=(new Date()).getTime();
 endtime=(new Date()).getTime();

 (endtime-starttime )/1000 
  }
  </script>
<script>
    $(function () {
      $("#example1").DataTable({
        // "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });</script>

  
  
</body>
</html>
