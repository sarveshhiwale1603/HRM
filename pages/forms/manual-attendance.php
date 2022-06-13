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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
 
  <style>
    .hoverTitles{
      color: black;
      cursor: pointer;
      font-weight: 500;
      /* font-size: small; */

    }
    .active1{
      cursor: pointer;
      font-weight: 500;
    }
      .hoverTitles:hover{
      color: #007bff !important;
      text-decoration:none !important;
    }
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
              <li class="breadcrumb-item active">Department</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
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
                    <div class="d-flex flex-row align-items-start hoverTitles  active1">
                    
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
    <a href="monthly_reports.php">
      <div class="d-flex flex-row align-items-start hoverTitles">
        <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg 	far fa-calendar"></i>
        <div class="ms-3">
            <p class="pb-0 mb-0" style="line-height:1;">Monthly Report</p>
              <small class="text-muted small pt-0 mt-0">View Monthly Report</small>
        </div>
    </div>
  </a>
  </div>
</div>
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
          
          <!-- /.col -->
        </div>
        <!-- Info boxes -->
        <hr class="border-light m-0 mb-3">
        <div class="row m-b-1 animated fadeInRight">
            <div class="col-md-4">
            <div class="card">
              <div class="card-header with-elements">
                Filter Attendance        </div>
              <div class="card-body">
     <form   method="post">
        <input type="hidden"  value="" />
        <input type="hidden" name="user_id" value="0" style="display:none;" />
                <div class="form-group">
                  <label for="name">
                   Date         
                      </label>
                  <input type="Date" class="form-control" name="name" placeholder="Leave Type">
                </div>

                <div class="form-group">
                  <label for="name">
                   Employee  </label>
                         
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
                
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" name="filter">
                   Filter     </button>
                  </div>
              </div>
              <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>    </div>
          </div>
          <div class="col-md-8">
            <div class="card user-profile-list">
              <div class="card-header with-elements"> <span class="card-header-title mr-2">View Attendance
                       </span> 

                       <button type="button" id="a1" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                          <i class="fa fa-plus" >&nbsp;</i>Add new
                    </button>

              
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Add Attendance Information</b>
                                  </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                                      <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="first_name">
                                                  Employee <span class="text-danger">*</span>
                                                </label>
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
                                            </div>
                                          </div>
                                                <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="date">
                                                  Attendance Date <span class="text-danger">*</span>
                                                </label>
                                                <div class="input-group">
                                                  <input type="date" class="form-control attendance_date_m" placeholder="Attendance Date" name="attendance_date" type="text" data-dtp="dtp_hn0SR">
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="clock_in">
                                                  In Time <span class="text-danger">*</span>
                                                </label>
                                                <div class="input-group">
                                                    
                                                  <input type="time" class="form-control timepicker_m" placeholder="In Time" name="in_time" type="text" data-dtp="dtp_l90xi">
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="clock_out">
                                                  Out Time <span class="text-danger">*</span>
                                                </label>
                                                <div class="input-group">
                                                  <input class="form-control timepicker_m" placeholder="Out Time" name="out_time" type="time" data-dtp="dtp_cZru4">

                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    
                    <div class="col-sm-8">
                      <div class="table" id="showtable">
                        <p>Show
                          <select name="showtable">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                          entries
                        </p>
                      </div>
                    </div>

                            <div class="col-sm-4" style="display:flex;text-align:end;">
                              <p style="padding:4px;">Search</p>
                              <input type="search" class="form-control form-control-sm" name="name">
                            </div>
                        </div>
                  <table class="datatables-demo table table-striped table-bordered" id="xin_table">
                    <thead>
                      <tr>
                        <th>Employee</th>
                        <th>Date</th>
                        <th> In Time</th>
                        <th>Out Time</th>
                        <th> Total</th>
                        <th> Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php     
                      if(isset($_POST['filter'])){
                        $name=$_POST['name'];
                        $emp_name=$_POST['employee_name'];
                            $sql1=mysqli_query($conn,"SELECT `id`, `date`, `clock_in`, `clock_out`, `employee_id`, `employee_name`, `status`,timediff(clock_out,clock_in) as total FROM `attendance` where date='$name' and employee_name='$emp_name'");
    while($arr=mysqli_fetch_assoc($sql1)){
    ?>
                      <tr>
                        <td>
                          <?php echo $arr['employee_name'];?>
                        </td>
                        <td>
                          <?php echo $arr['date'];?>
                        </td>
                        <td>
                          <?php echo $arr['clock_in'];?>
                        </td>
                        <td>
                          <?php echo $arr['clock_out'];?>
                        </td>
                      
                        <td>
                        
                        <?php echo $arr['total'];?>
                        </td>
                        <td>
                                                <a href="manual-attendance.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>

                               <button type="button" class="btn btn-default btn-sm"
                                 data-toggle="modal" data-target="#modal-default">
                                                                            </button>
                                               


    </td>                 
    </tr>     
    <?php
    }
    ?>                                       
<?php
    }  
                     else {
                      $sql1=mysqli_query($conn,"SELECT `id`, `date`, `clock_in`, `clock_out`, `employee_id`, `employee_name`, `status`,timediff(clock_out,clock_in) as total FROM `attendance`");
                      while($arr=mysqli_fetch_assoc($sql1)){
                      ?>
                                        <tr>
                                          <td>
                                            <?php echo $arr['employee_name'];?>
                                          </td>
                                          <td>
                                            <?php echo $arr['date'];?>
                                          </td>
                                          <td>
                                            <?php echo $arr['clock_in'];?>
                                          </td>
                                          <td>
                                            <?php echo $arr['clock_out'];?>
                                          </td>
                                        
                                          <td>
                                          <?php echo $arr['total'];?>
                                          </td>
                                          <td>
              <a href="manual-attendance.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="ConfirmDelete()" style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>
             <button  type="button" class="btn btn-warning btn-rounded btn-icon usereditid" data-toggle="modal" data-id='<?php echo $arr['id']; ?>'
                                style="color: aliceblue"> <i class="fas fa-pen"></i>
                                      </button>
                                                                 
                  
                  
                      </td>                 
                      </tr>                                  
    <?php
    }  }
    ?>
                    </tbody>
                  </table>
                </div>
              
                <div class="modal fade closemaual" id="dnkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="check.php">
      <div class="modal-body body1">
      </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="manualAttendanceEdit">Save changes</button>
    </div>
  </div>
  </div>
</div>
              
             
                <!-- <div class="row">
                  <div class="col-md-9">
                    <div class="dataTables_info" id="example1_info" role="status">Showing 1 to 5 of 5 records

                    </div>
                  </div>
                    <div class="col-md-3">
                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination" style="margin:auto">
                          <li class="paginate_button page-item previous disabled" id="example1_previous">
                            <a href="#"  class="page-link">Previous</a>
                          </li>
                            
                              <li class="paginate_button" name="next" id="example1_next">
                                <a href="#"class="page-link">Next</a>
                              </li>
                            </ul>
                      </div>
                    </div>
                  </div>  -->
          
            <!-- [ Main Content ] end --> 
          </div>
        </div>
        <!-- [ Main Content ] end -->
        </div>
    </div>
    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Agent Status</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">

                                    <div class="row">


                                        <div class="form-group col-12">
                                            <label>Change Agent Status</label>
                                            <select class="form-control" name="status">

                                                <option value="0">Deactivate</option>
                                                <option value="1">Activate</option>

                                            </select>
                                        </div>
                                        <input type="text" name="aid" class="category" hidden>
                                    </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                            </div>
        <div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">
                  Notifications          <br>
                  <small class="text-muted">
                  Mark all as read          </small> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
              </div>
              <div class="modal-body">
                <div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
                  <ul class="list-unstyled task-list">
                                                    </ul>
                  <!--<div class="text-center"> <a href="#!" class="b-b-primary text-primary">View Friend List</a> </div>-->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-danger btn-sm" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade show delete-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Are you sure you want to delete this record?        </h5>
        <button type="button" class="close" data-dismiss="modal" > <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"> <strong>
          You won't be able to revert this!          </strong> </div>
      </div>


  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include("../include/footer.php"); ?>
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

<script>
$(document).ready(function(){
$('.usereditid').click(function(){
  let dnk = $(this).data('id');

  $.ajax({
   url: 'check.php',
   type: 'post',
   data: {dnk: dnk},
   success: function(response1){ 
     $('.body1').html(response1);
     $('#dnkModal').modal('show'); 
   }
 });
});


});
</script>
  
</body>
</html>
